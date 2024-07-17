<script setup>
import { Card } from "@/Components/ui/card";
import { CardHeader } from "@/Components/ui/card";
import { CardTitle } from "@/Components/ui/card";
import { CardContent } from "@/Components/ui/card";
import { CardFooter } from "@/Components/ui/card";
import { Button } from "@/Components/ui/button";
import { Link } from "@inertiajs/vue3";
import { CalendarPlus } from "lucide-vue-next";
</script>
<template>
    <div
        class="flex flex-col w-screen px-2 md:py-0 py-12 md:px-20 place-items-center justify-center md:h-[35rem]"
    >
        <Card
            class="md:w-5/6 w-screen md:h-[25rem] bg-secondary-foreground opacity-90 rounded-xl md:rounded-[4rem] flex flex-col place-items-center justify-center"
        >
            <CardHeader class="">
                <CardTitle
                    class="text-accent text-xl scale-110 md:scale-100 md:text-4xl"
                    >Ready to have a conversation?
                </CardTitle>
            </CardHeader>
            <CardContent
                class="text-accent text-lg md:text-xl text-justify md:text-center px-6 md:px-20"
            >
                We’re here to discuss how we can partner, sharing our knowledge
                and experience for your product development needs. Get started
                driving your business forward.
            </CardContent>
            <CardFooter class="text-accent">
                <Link href="/Contact">
                    <Button
                        class="md:text-2xl text-md px-6 py-6 md:py-8 md:px-8 md:mt-4 rounded-[15px]"
                        variant="secondary"
                    >
                        <CalendarPlus class="md:scale-100 scale-75 mr-4" />
                        Schedule free consultation</Button
                    ></Link
                >
            </CardFooter>
        </Card>
    </div>
</template>
