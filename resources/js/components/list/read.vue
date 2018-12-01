<template>
  <div>
    <input v-model:'search'> </input>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col"> Título </th>
          <th scope="col"> Editora </th>
          <th scope="col"> Edição </th>
          <th scope="col"> País </th>
          <th scope="col"> ISBN </th>
          <th scope="col"> Número de páginas </th>
          <th scope="col"> Ações </th>
        </tr>
      </thead>

      <tbody>
        <tr v-for = "book in searchBooks" >
          <td> {{ book.title }}</td>
          <td> {{ book.publisher }} </td>
          <td> {{ book.ed }} </td>
           <td> {{ book.country }}</td>
          <td> {{ book.isbn }} </td>
          <td> {{ book.pages }} </td>

          <td >
            <button v-on:click="editar"> Editar </button>
            <button v-on:click="excluir"> Excluir </button>
          </td>
        </tr>

      </tbody>

    <button v-on:click="adicionar"> Adicionar livro </button>
    </table>

</div>
</template>

<script>
    export default {
    	name: 'VueBooksRead',
    	props: ['books'],
    	data() {
    		return {
    			search:"",
    			livros: JSON.parse(this.books)
    		}
    	},
    	computed: {
    		searchBooks: function() {
    			var self = this
    			return _.orderBy(self.livros.search(function(books){
    				var searchRegex = new RegExp(self.search,'i');
    				return( searchRegex.test(books.title)	)
    			}))
    		}
    	}
    }
</script>