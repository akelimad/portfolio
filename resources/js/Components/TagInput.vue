<template>
  <div class='tag-input'>
    <div v-for='(tag, index) in form.tags' :key='tag' class='tag-input__tag'>
      <span @click='removeTag(index)'>x</span>
      {{ tag }}
    </div>
    <input 
      type='text' 
      placeholder="Enter a Tag" 
      class='tag-input__text'
      @keydown.enter='addTag' 
      @keydown.188='addTag' 
      @keydown.delete='removeLastTag'
    />
    <input type="hidden" v-model="form.tags">
  </div>
</template>
<script>
export default {
    props: ["tags"],
  data () {
    return {
        form: {
            tags: this.tags
        }
    }
  },
  methods: {
    addTag (event) {
        event.preventDefault()
        var val = event.target.value.trim()
        if (val.length > 0) {
            this.form.tags.push(val)
            event.target.value = ''
            this.$emit('tagUpdated', this.form)
        }
    },
    removeLastTag(event) {
        if (event.target.value.length === 0) {
            this.removeTag(this.form.tags.length - 1)
            this.$emit('tagUpdated', this.form)
        }
    },
    removeTag (index) {
        this.form.tags.splice(index, 1)
        this.$emit('tagUpdated', this.form)
    }
  }
}
</script>
<style scoped>
.tag-input {
  width: 100%;
  border: 1px solid #eee;
  font-size: 1em;
  height: 50px;
  box-sizing: border-box;
  padding: 0 10px;
}

.tag-input__tag {
  height: 30px;
  float: left;
  margin-right: 10px;
  background-color: #eee;
  margin-top: 10px;
  line-height: 30px;
  padding: 0 5px;
  border-radius: 5px;
}

.tag-input__tag > span {
  cursor: pointer;
  opacity: 0.75;
}

.tag-input__text {
  border: none;
  outline: none;
  font-size: 1em;
  line-height: 50px;
  background: none;
}
</style>