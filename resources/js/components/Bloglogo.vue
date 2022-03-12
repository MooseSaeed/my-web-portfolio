<template>
    <div class="max-w-[40%]">
        <kinesis-container
            event="scroll"
            class="flex flex-row items-center justify-center self-center justify-self-center"
        >
            <div
                data-aos-delay="50"
                data-aos-duration="400"
                class="mr-1 self-start"
                data-aos="zoom-out-down"
            >
                <kinesis-element :originY="25" :strength="60">
                    <img src="/images/iblog.png" alt="" />
                </kinesis-element>
            </div>

            <div
                data-aos-duration="800"
                data-aos="zoom-in-up"
                data-aos-mirror="true"
            >
                <img src="/images/isaidcodenoi.png" alt="" />
            </div>

            <div
                data-aos-delay="300"
                data-aos-duration="500"
                class="ml-1 self-end"
                data-aos="zoom-in-left"
            >
                <kinesis-element :originY="35" :strength="-60">
                    <img src="/images/exblog.png" alt="" />
                </kinesis-element>
            </div>
        </kinesis-container>
    </div>
</template>

<script>
import VueKinesis from "vue-kinesis";
import { KinesisContainer, KinesisElement } from "vue-kinesis";

export default {
    components: {
        VueKinesis,
        KinesisContainer,
        KinesisElement,
    },
};
</script>

<style></style>
