<script setup>
import { Card } from "@/Components/ui/card";
import { Label } from "@/Components/ui/label";
import { Input } from "@/Components/ui/input";
import { ChevronDown } from "lucide-vue-next";
import { Button } from "@/Components/ui/button";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
  email: null,
  company: null,
  service: null,
  message: null,
});

const submit = () => {
  form.post(route("contact"));
  form.reset();
};
</script>
<template>
  <div class="flex sm:flex-row flex-col place-items-center justify-center sm:justify-between sm:gap-2 relative">
    <div
      class="flex flex-col text-5xl md:text-7xl md:w-1/2 place-items-center md:place-items-start pr-32 px-4 md:px-16 justify-center pb-8 md:justify-center snap-y snap-mandatory snap-start tracking-tight h-[40%] md:h-full text-primary">
      Let’s Talk About Your Next Big Project
    </div>

    <form @submit.prevent="submit" class="flex flex-col px-4 w-full md:px-0 md:w-1/2 justify-between md:pt-32 pb-4">
      <Card class="md:w-5/6 py-8 w-full bg-accent flex flex-col justify-around h-full rounded-[1.2rem]">
        <div class="flex flex-col place-items-center">
          <h1 class="text-3xl text-blue-700">Send Us a Message</h1>
        </div>
        <div class="flex flex-col gap-4 px-8 justify-between md:pt-12 w-full">
          <div class="flex flex-col place-items-start gap-1">
            <Label for="email" class="text-right text-md md:text-xl">
              Email
            </Label>
            <Input :placeholder="$page.props.auth.user.email" v-model="form.email" id="email"
              class="py-1 md:py-6 text-md md:text-xl" />
          </div>

          <div class="flex flex-col place-items-start gap-1">
            <Label for="name" class="text-right text-md md:text-xl">
              Company name
            </Label>
            <Input v-model="form.company" id="name" class="py-1 md:py-6 text-md md:text-xl" />
          </div>
          <div class="flex flex-col place-items-start gap-1 relative">
            <Label for="serviceType" class="text-right text-md">
              What service do you need?
            </Label>
            <div class="absolute bottom-3 right-2 opacity-80">
              <ChevronDown />
            </div>

            <select v-model="form.service" id="serviceType"
              class="py-2 text-md md:text-xl w-full border rounded-[7px] px-2" placeholder="Web Development">
              <option value="Web Development">Web Development</option>
              <option value="Mobile Development">Mobile Development</option>
              <option value="Project Management">Project Management</option>
            </select>
          </div>
          <div class="flex flex-col">
            <textarea v-model="form.message" class="py-1 md:py-6 text-md border"
              placeholder="Type your message here." />
          </div>

          <div class="w-full">
            <Button
              class="group px-5 md:px-6 text-lg rounded-[12px] py-3 md:py-7 sm:flex font-mona bg-primary text-accent w-full"
              type="submit" :disabled="form.processing">Submit
            </Button>
          </div>
        </div>
      </Card>
    </form>
  </div>
</template>