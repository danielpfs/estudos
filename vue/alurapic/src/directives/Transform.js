export default {
    bind(el, binding, vnode) {
        let current = 0;
        
        el.addEventListener('click', function() {
            if (!binding.arg || binding.arg == 'scale') {
                current = binding.value || 1.2;
                this.style.transform = `scale(${current})`;
            } else if (binding.arg == 'rotate'){
                current+= binding.value || 90;
                
                this.style.transform = `rotate(${current}deg)`;
            }

            if (binding.modifiers.animate) {
                this.style.transition = "transform 0.5s";
            }
        });
    }
}