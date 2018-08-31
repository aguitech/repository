<style>
.blink {
    -webkit-animation: blink 1s step-end infinite;
            animation: blink 1s step-end infinite;
}
@-webkit-keyframes blink { 50% { visibility: hidden; }}
        @keyframes blink { 50% { visibility: hidden; }}
</style>
This is <span class="blink">blink</span>