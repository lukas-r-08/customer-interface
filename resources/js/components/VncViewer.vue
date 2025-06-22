<template>
    <div class="vnc-container">
        <iframe
            :src="vncUrl"
            class="vnc-frame"
            allow="clipboard-read; clipboard-write"
        ></iframe>
    </div>
</template>

<script>
export default {
    props: {
        serverId: {
            type: Number,
            required: true
        }
    },
    computed: {
        vncUrl() {
            const host = window.location.hostname;
            return `/novnc/vnc.html?host=${host}&port=6080&autoconnect=true&resize=scale`;
        }
    }
}
</script>

<style scoped>
.vnc-container {
    width: 100%;
    height: 600px;
    background: #000;
    border-radius: 4px;
    overflow: hidden;
}
.vnc-frame {
    width: 100%;
    height: 100%;
    border: none;
}
</style>
