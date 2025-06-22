<template>
    <div class="server-control">
        <div class="controls">
            <button @click="startServer" :disabled="status === 'running'">Start</button>
            <button @click="stopServer" :disabled="status === 'stopped'">Stop</button>
            <button @click="restartServer">Restart</button>
            <button @click="toggleVnc">VNC Console</button>
        </div>

        <div v-if="showVnc" class="mt-4">
            <vnc-viewer :server-id="serverId" />
        </div>
    </div>
</template>

<script>
import VncViewer from './VncViewer.vue';

export default {
    name: 'ServerControl',
    components: {
        VncViewer
    },
    props: {
        serverId: {
            type: Number,
            required: true
        }
    },
    data() {
        return {
            status: 'stopped',
            showVnc: false
        }
    },
    methods: {
        async toggleVnc() {
            this.showVnc = !this.showVnc;
        },
        async startServer() {
            await axios.post(`/server/${this.serverId}/start`);
            this.updateConsole();
        },
        async stopServer() {
            await axios.post(`/server/${this.serverId}/stop`);
            this.updateConsole();
        },
        async restartServer() {
            await axios.post(`/server/${this.serverId}/restart`);
            this.updateConsole();
        },
        async vnc() {
            this.showVnc = !this.showVnc;
        }
    },
}
</script>

<style scoped>
.server-control {
    padding: 1rem;
}
.controls {
    display: flex;
    gap: 1rem;
}
</style>
