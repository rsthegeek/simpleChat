<template>
  <div class="input-group">
    <input
        id="btn-input"
        type="text"
        name="message"
        class="form-control input-sm"
        placeholder="پیام خود را تایپ نمایید..."
        v-model="newMessage"
        @keyup.enter="sendMessage"
        @keyup="sendTypingEvent">

    <button class="btn btn-primary btn-sm mr-1" id="btn-chat" @click="sendMessage">
      ارسال
    </button>
  </div>
</template>

<script>
export default {
  props: ['user'],

  data() {
    return {
      newMessage: ''
    }
  },

  methods: {
    sendTypingEvent() {
      Echo.join('chat')
      .whisper('typing', this.user);
    },

    sendMessage() {
      this.$emit('messagesent', {
        user: this.user,
        message: this.newMessage
      });

      this.newMessage = ''
    }
  }
}
</script>