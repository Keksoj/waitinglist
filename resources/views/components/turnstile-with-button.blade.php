<div class="px-8 flex flex-wrap items-center justify-center gap-4">
    <x-turnstile data-callback="onTurnstileSuccess" data-error-callback="onTurnstileError"
        data-expired-callback="onTurnstileExpired" data-theme="light" />

    <button type="submit" id="submit-button" class="validation-button h-[71px]" disabled=true>
        {{ $buttonText }}
    </button>
</div>

<script>
    function onTurnstileSuccess(token) {
        console.log("✅ Turnstile complete!", token);
        document.getElementById('submit-button').disabled = false;
    }

    function onTurnstileError() {
        console.log("Turnstile failed!");
        document.getElementById('submit-button').disabled = true;
    }

    function onTurnstileExpired() {
        console.log("Turnstile expired");
        document.getElementById('submit-button').disabled = true;
    }
</script>
