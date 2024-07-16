<div x-data="{
    copyCode() {
        const codeElement = $el.closest('.code-container').querySelector('code');
        const codeText = codeElement.innerText;
        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(codeText).then(() => {
                $el.querySelector('.copied').style.display = 'block';
                $el.querySelector('.icon').style.display = 'none';
                $el.querySelector('.copiedIcon').style.display = 'block';
                setTimeout(() => {
                    $el.querySelector('.copied').style.display = 'none';
                    $el.querySelector('.copiedIcon').style.display = 'none';
                    $el.querySelector('.icon').style.display = 'block';
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        } else {
            console.error('Clipboard API not available');
        }
    }
}" class="absolute z-50 top-3 right-4">
    <div class="flex gap-1.5">
        <span class="hidden text-sm text-teal-500 copied">Copied!</span>
        <x-icon name="clipboard-document-check" class="text-teal-500 !size-5 hidden copiedIcon" />
        <x-icon @click="copyCode" name="clipboard" class="text-slate-200 !size-5 cursor-pointer icon" />
    </div>
</div>
