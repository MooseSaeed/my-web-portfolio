import { reactive } from "vue";

export const store = reactive({
    toggleActive: false,
    dark() {
        document.querySelector("body").classList.add("dark");
        this.toggleActive = true;
    },
    light() {
        document.querySelector("body").classList.remove("dark");
        this.toggleActive = false;
    },

    modeToggle() {
        if (
            this.darkMode ||
            document.querySelector("body").classList.contains("dark")
        ) {
            this.light();
        } else {
            this.dark();
        }
    },
});
