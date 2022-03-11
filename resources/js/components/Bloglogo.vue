<template>
    <div class="max-w-[40%]">
        <kinesis-container
            event="scroll"
            class="flex flex-row items-center justify-center self-center justify-self-center"
        >
            <kinesis-element
                class="self-start"
                :transformOrigin="center"
                :originY="66"
                :strength="-120"
            >
                <img src="/images/iblog.png" alt="" />
            </kinesis-element>

            <div><img src="/images/isaidcodenoi.png" alt="" /></div>

            <kinesis-element
                class="self-end"
                type="translate"
                :originY="65"
                :strength="120"
            >
                <img src="/images/exblog.png" alt="" />
            </kinesis-element>
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
