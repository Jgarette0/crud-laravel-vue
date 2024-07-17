<script setup>
import { Card } from "@/Components/ui/card";
import { Label } from "@/Components/ui/label";
import { Input } from "@/Components/ui/input";
import { Textarea } from "@/Components/ui/textarea";
import { Button } from "@/Components/ui/button";
</script>
<template>
    <div
        class="flex flex-col text-5xl md:text-7xl text-accent md:w-1/2 place-items-center md:place-items-start pr-32 px-4 md:px-16 justify-end pb-8 md:justify-center snap-y snap-mandatory snap-start tracking-tight h-[40%] md:h-full"
    >
        Let’s Talk About Your Next Big Project
    </div>
    <div
        class="flex flex-col px-4 w-full md:px-0 md:w-1/2 justify-between md:pt-32 pb-4 md:h-full h-[60%]"
    >
        <Card
            class="md:w-5/6 py-8 w-full bg-accent flex flex-col justify-around h-full rounded-[1.2rem]"
        >
            <div class="flex flex-col gap-4 p-4 md:p-12 w-full">
                <div class="flex flex-col place-items-start gap-1">
                    <Label for="name" class="text-right text-md md:text-xl">
                        Full name
                    </Label>
                    <Input id="name" class="py-3 md:py-6 text-md md:text-xl" />
                </div>
                <div class="flex flex-col place-items-start gap-1">
                    <Label for="username" class="text-right text-md md:text-xl">
                        Email
                    </Label>
                    <Input
                        id="username"
                        class="py-1 md:py-6 text-md md:text-xl"
                    />
                </div>
                <div class="flex flex-col place-items-start gap-1">
                    <Label for="username" class="text-right text-md md:text-xl">
                        Company name
                    </Label>
                    <Input
                        id="username"
                        class="py-1 md:py-6 text-md md:text-xl"
                    />
                </div>
                <div class="flex flex-col place-items-start gap-1">
                    <Label for="username" class="text-right text-md md:text-xl">
                        How can we help you?
                    </Label>
                    <Textarea
                        class="py-1 md:py-6 text-md md:text-xl"
                        placeholder="Type your message here."
                    />
                </div>
                <Button
                    class="group px-5 md:px-6 text-lg md:text-2xl rounded-full py-3 md:py-7 sm:flex font-mona bg-primary text-accent"
                    >Submit
                </Button>
            </div></Card
        >
    </div>
</template>
