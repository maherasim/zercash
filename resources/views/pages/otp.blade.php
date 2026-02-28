@extends('layouts.auth')
@section('title', 'Verify OTP')

@section('content')
<div class="video-background-section relative min-h-screen flex flex-col items-center justify-center overflow-hidden">
    <video autoplay muted loop playsinline class="video-background absolute inset-0 w-full h-full object-cover">
        <source src="{{ asset('assets/images/video.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay absolute inset-0" style="background: rgba(0, 0, 0, 0.4)"></div>

    <div class="relative z-10 w-full flex flex-col items-center justify-center px-6 py-8 min-h-screen">
        <div class="max-w-md w-full flex flex-col items-center">
            <div class="text-center mb-6">
                <div class="inline-flex items-center gap-2 mb-6">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Lumen" class="w-14 h-14" />
                </div>
                <h1 class="text-3xl font-bold text-white mb-2">Verify OTP</h1>
                <p class="text-white/80 text-sm" id="email-display">Code sent to your email</p>
            </div>

            <div class="bg-white rounded-3xl shadow-2xl p-8 w-full">
                <form id="otp-form" class="space-y-6">
                    <div class="flex justify-center gap-3 mb-6">
                        @for($i = 0; $i < 6; $i++)
                        <input type="text" class="otp-input" name="otp[]" maxlength="1" pattern="[0-9]" required />
                        @endfor
                    </div>
                    <div class="text-center mb-4">
                        <p class="text-gray-600 text-sm">Resend code in <span id="timer" class="font-semibold text-indigo-600">60</span>s</p>
                    </div>
                    <button type="submit" id="verify-otp-btn" class="w-full bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white py-3.5 rounded-xl font-semibold transition-all duration-300 transform hover:scale-[1.02] shadow-lg disabled:opacity-70 disabled:cursor-not-allowed">
                        Verify OTP
                    </button>
                    <div class="text-center">
                        <button type="button" id="resend-btn" class="text-purple-600 font-semibold text-sm hover:underline disabled:text-gray-400 disabled:cursor-not-allowed" disabled>Resend OTP</button>
                    </div>
                    <div class="text-center pt-4 border-t border-gray-200">
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 text-sm inline-flex items-center gap-2 transition-colors">
                            <i class="fas fa-arrow-left"></i> Back to Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
(function() {
    var email = sessionStorage.getItem("loginEmail") || "";
    if (!email) {
        window.location.href = "{{ route('login') }}";
        return;
    }
    document.getElementById("email-display").textContent = "Code sent to " + email;

    var otpInputs = document.querySelectorAll(".otp-input");
    otpInputs.forEach(function(input, index) {
        input.addEventListener("input", function(e) {
            if (e.target.value.length === 1 && index < otpInputs.length - 1) otpInputs[index + 1].focus();
        });
        input.addEventListener("keydown", function(e) {
            if (e.key === "Backspace" && !e.target.value && index > 0) otpInputs[index - 1].focus();
        });
    });

    var timeLeft = 60;
    var timerEl = document.getElementById("timer");
    var resendBtn = document.getElementById("resend-btn");
    var countdown = setInterval(function() {
        timeLeft--;
        timerEl.textContent = timeLeft;
        if (timeLeft <= 0) {
            clearInterval(countdown);
            timerEl.parentElement.style.display = "none";
            resendBtn.disabled = false;
        }
    }, 1000);

    resendBtn.addEventListener("click", function() {
        timeLeft = 60;
        timerEl.textContent = timeLeft;
        timerEl.parentElement.style.display = "block";
        resendBtn.disabled = true;
        var newCountdown = setInterval(function() {
            timeLeft--;
            timerEl.textContent = timeLeft;
            if (timeLeft <= 0) {
                clearInterval(newCountdown);
                timerEl.parentElement.style.display = "none";
                resendBtn.disabled = false;
            }
        }, 1000);
    });

    document.getElementById("otp-form").addEventListener("submit", function(e) {
        e.preventDefault();
        var otp = Array.from(otpInputs).map(function(i) { return i.value; }).join("");
        if (otp.length !== 6) {
            alert("Please enter complete OTP code");
            return;
        }
        var btn = document.getElementById("verify-otp-btn");
        btn.disabled = true;
        btn.textContent = "Verifying...";
        fetch("https://admin.yekbun.net/api/verify-currency-login", {
            method: "POST",
            headers: { "Content-Type": "application/json", "Accept": "application/json" },
            body: JSON.stringify({ email: email, otp: otp })
        })
        .then(function(res) { return res.json().then(function(data) { return { ok: res.ok, status: res.status, data: data }; }); })
        .then(function(result) {
            if (result.ok) {
                sessionStorage.setItem("isLoggedIn", "true");
                sessionStorage.setItem("userEmail", email);
                window.location.href = result.data && result.data.redirect ? result.data.redirect : "{{ route('dashboard') }}";
            } else {
                var msg = (result.data && (result.data.message || result.data.error)) || "Invalid or expired OTP. Please try again.";
                alert(msg);
                btn.disabled = false;
                btn.textContent = "Verify OTP";
            }
        })
        .catch(function() {
            alert("Connection error. Please try again.");
            btn.disabled = false;
            btn.textContent = "Verify OTP";
        });
    });
})();
</script>
@endpush
@endsection
