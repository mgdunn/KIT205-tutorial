#include <stdio.h>
#include <stdlib.h>
#include "list.h"

void main(int argc, char* argv[]) {

	bst_test();

}


/*
int main(int argc, char* argv[]) {

	List my_list; //new list
	int input; //number user inputs into list
	int lowest; //lowest number in the list
	int quit; //option to quit
	int option; //switch option 


	my_list = new_list();
	printf("Enter number to input: ");
	scanf_s("%d", &input);
	lowest = input;
	quit = 0;


	while (input != 0) {
		if (input < lowest) {
			lowest = input;
			insert_at_front(&my_list, input);
		}
		else {
			insert_in_order(&my_list, input);
		}
		printf("Enter number to input: ");
		scanf_s("%d", &input);
	}
	printf("Input number to delete: ");
	delete_list(&my_list, input);

	while (!quit) {
		printf("What is your option:\n");
		printf("0 to quit\n");
		printf("1 to insert");
		printf("");
		printf("");
		scanf_s("%d", option);
		switch (option) {
		case 0:
			quit = 1;
			break;
		case 1:
			option_insert(&my_list);
			break;
		case 2:
			option_delete(&my_list);
			break;
		case 3:
			option_print(&my_list);
			break;
		}
	}

	reverse(&my_list);
	merge(&my_list);



	destroy_list(&my_list);
}

//Inserts user input into list
void option_insert(List* my_list) {
	int input; //value of input

	printf("What number would you like to input: "); 
	scanf_s("%d", &input);
	insert_at_front(my_list, input);
	printf("%d was inserted the the front.", input);
}

//Deletes input from list
void option_delete(List* my_list){
	int option; //value of input

	printf("What number would you like to delete: ");
	scanf_s("%d", &option);
	delete_list(my_list, option);
	printf("%d was deleted from the list.", option);
}

//Calls print_list function
void option_print(List* my_list) {
	printf("Printing list: ");
	print_list(my_list);
}

List reverse(List* my_list) {
	List reverse;
	ListNodePtr current;
	

	reverse = new_list();
	current = my_list->head;
	
	while (current != NULL) {
		insert_at_front(&reverse, current->data);
		current = current->next;
	}
	return reverse;
}

List merge(List* list1, List* list2) {
	List merge;
	ListNodePtr current1;
	ListNodePtr current2;

	merge = new_list();
	current1 = list1->head;
	current2 = list2->head;

	while (current1 != NULL && current2 != NULL) {
		if (current1->data <= current2->data) {
			insert_in_order(&merge, current1->data);
			current1 = current1->next;
		}
		else {
			insert_in_order(&merge, current2->data);
			current2 = current2->next;
		}
	}

	// If one of the lists still has elements, add them to the merged list
	while (current1 != NULL) {
		insert_in_order(&merge, current1->data);
		current1 = current1->next;
	}

	while (current2 != NULL) {
		insert_in_order(&merge, current2->data);
		current2 = current2->next;
	}

	return merge;
}
*/



