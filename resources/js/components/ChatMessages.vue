<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <i style="font-size: 0.78rem;">{{ message.user.name }}</i>
                </div>
                <p>{{ message.message }}</p>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['messages']
    };
</script>