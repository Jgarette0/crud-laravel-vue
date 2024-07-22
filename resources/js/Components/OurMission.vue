<script setup>
import { Button } from "@/Components/ui/button";
</script>

<template>
    <div
        class="flex flex-col h-full py-12 md:h-screen justify-center gap-8 bg-primary px-4 md:p-20"
    >
        <div
            class="md:text-2xl text-md text-accent w-full md:w-[50%] font-semibold"
        >
            At GAR Technology, we love taking on complex challenges and
            disrupting industry norms.
        </div>
        <div class="w-full flex flex-col place-items-center">
            <img src="images/Meeting.png" class="w-80 h-80" alt="Image" />
        </div>
        <div class="flex flex-col gap-4 mt-4">
            <div>
                <div
                    class="group text-md md:text-lg rounded-[15px] sm:flex font-mona opacity-90 bg-accent w-fit px-2 py-1"
                >
                    Our Mission
                </div>
            </div>

            <div class="md:text-5xl text-2xl max-w-screen-xl text-accent">
                Innovating with the best, designing with purpose, and
                engineering for a sustainable future.
            </div>
        </div>
    </div>
</template>
