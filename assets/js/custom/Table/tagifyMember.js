var inputElm = document.querySelector('#kt_tagify_members');

const usersList1 = [
    { value: 1, name: 'Emma Smith', avatar: '', email: '' },
    { value: 2, name: 'Maximo Smith', avatar: '', email: '' },
    { value: 3, name: 'Sean Bean', avatar: '', email: '' },
    { value: 4, name: 'Brian Cox', avatar: '', email: '' },
    { value: 5, name: 'Francis Mitcham', avatar: '', email: '' },
    { value: 6, name: 'Dan Wilson', avatar: '', email: '' },
    { value: 7, name: 'Ana Crown', avatar: '', email: '' },
    { value: 8, name: 'John Miller', avatar: '', email: '' }
];

function tagTemplate1(tagData) {
    return `
        <tag title="${(tagData.title || tagData.email)}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div class="d-flex align-items-center">
                <div class='tagify__tag__avatar-wrap ps-0'>
                    <img onerror="this.style.visibility='hidden'" class="rounded-circle w-25px me-2" src="assets/media/${tagData.avatar}">
                </div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
    `
}

function suggestionItemTemplate1(tagData) {
    return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">

            ${tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap me-2'>
                        <img onerror="this.style.visibility='hidden'"  class="rounded-circle w-50px me-2" src="assets/media/${tagData.avatar}">
                    </div>` : ''
                }

            <div class="d-flex flex-column">
                <strong>${tagData.name}</strong>
                <span>${tagData.email}</span>
            </div>
        </div>
    `
}

// initialize Tagify on the above input node reference
var tagify1 = new Tagify(inputElm, {
    tagTextProp: 'name', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
    enforceWhitelist: true,
    skipInvalid: true, // do not remporarily add invalid tags
    dropdown: {
        closeOnSelect: false,
        enabled: 0,
        classname: 'users-list',
        searchKeys: ['name', 'email']  // very important to set by which keys to search for suggesttions when typing
    },
    templates: {
        tag: tagTemplate1,
        dropdownItem: suggestionItemTemplate1
    },
    whitelist: usersList1
})

tagify1.on('dropdown:show dropdown:updated', onDropdownShow1)
tagify1.on('dropdown:select', onSelectSuggestion1)

var addAllSuggestionsElm;

function onDropdownShow1(e) {
    var dropdownContentElm = e.detail.tagify1.DOM.dropdown.content;

    if (tagify1.suggestedListItems.length > 1) {
        addAllSuggestionsElm = getAddAllSuggestionsElm();

        // insert "addAllSuggestionsElm" as the first element in the suggestions list
        dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
    }
}

function onSelectSuggestion1(e) {
    if (e.detail.elm == addAllSuggestionsElm)
        tagify1.dropdown.selectAll.call(tagify1);
}

// create a "add all" custom suggestion element every time the dropdown changes
// function getAddAllSuggestionsElm() {
//     // suggestions items should be based on "dropdownItem" template
//     return tagify1.parseTemplate('dropdownItem', [{
//         class: "addAll",
//         name: "Add all",
//         email: tagify1.settings.whitelist.reduce(function (remainingSuggestions, item) {
//             return tagify1.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
//         }, 0) + " Members"
//     }]
//     )
// }