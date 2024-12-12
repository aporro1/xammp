Runner.namespace('Runner.lang');

Runner.lang.constants = {

	current_language: "Greek",

//	for list page
	TEXT_FIRST: 'Πρώτο',
	TEXT_PREVIOUS: 'Προηγούμενο',
	TEXT_NEXT: 'Επόμενο',
	TEXT_LAST: 'Τελευταίο',
	TEXT_PROCEED_TO: 'Μεταφορά σε',
	TEXT_DETAIL_NOT_SAVED: 'Οι εγγραφές στο %s δεν έχουν αποθηκευθεί',
	TEXT_NO_RECORDS: 'Δεν βρέθηκαν εγγραφές',
	TEXT_DETAIL_GOTO: 'Πήγαινε',
	TEXT_SHOW_ALL: 'Προβολή όλων',
	TEXT_SHOW_OPTIONS: 'Εμφάνιση επιλογών',
	TEXT_HIDE_OPTIONS: 'Απόκρυψη επιλογών',
	TEXT_SEARCH_SHOW_OPTIONS:'Εμφάνιση επιλογών αναζήτησης',
	TEXT_SEARCH_HIDE_OPTIONS:'Απόκρυψη επιλογών αναζήτησης',
	TEXT_SHOW_SEARCH_PANEL:'Εμφάνιση πάνελ αναζήτησης',
	TEXT_HIDE_SEARCH_PANEL:'Απόκρυψη πάνελ αναζήτησης',


	TEXT_LOADING: 'Φόρτωση',
	TEXT_DELETE_CONFIRM: 'Επιθυμείτε πραγματικά να διαγράψετε τις εγγραφές',
	TEXT_PAGE: 'Σελίδα',
	TEXT_PAGEMAX: 'Από',

//	for editing pages
	TEXT_INVALID_CAPTCHA_CODE: 'Ο κωδικός επιβεβαίωσης δεν είναι σωστός',
	TEXT_PLEASE_SELECT: 'Παρακαλώ επιλέξτε',
	TEXT_CTRL_CLICK: 'CTRL+κλίκ για σύνθετη ταξινόμηση',
	TEXT_SAVE: 'Αποθήκευση',
	TEXT_CANCEL: 'Ακύρωση',
	TEXT_PREVIEW: 'Προεπισκόπηση',
	TEXT_HIDE: 'Απόκρυψη',
	TEXT_QUESTION_UNSAVED_CHANGES: 'Έχετε κάνει αλλαγές στην εγγραφή. Θέλετε να φύγετε από την σελίδα χωρίς αποθήκευση;',

	TEXT_EDIT: 'Επεξεργασία',
	TEXT_COPY: 'Αντιγραφή',
	TEXT_VIEW: 'Προβολή',
	TEXT_INLINE_EDIT: 'Επεξεργασία',
	TEXT_INLINE_ADD: 'Εισαγωγή',
	TEXT_AA_P_ADD: 'Εισαγωγή',

	TEXT_FIELDFILTER_HINT: 'Φιλτράρισμα τιμών πεδίου',

//	for userinfo page
	USERINFO_SENT_EMAIL: 'Ένα μήνυμα ηλεκτρονικού ταχυδρομείου με τον κωδικό ασφαλείας εστάλη σε %email%.',
	USERINFO_ENTER_CODE: 'Εισάγετε αυτόν τον κωδικό παρακάτω.',
	USERINFO_SENT_TEXT: 'Ένα μήνυμα κειμένου με τον κωδικό ασφαλείας εστάλη στο %phone%.',
	USERINFO_INSTALL_APP1: 'Εγκαταστήστε μια εφαρμογή ελέγχου ταυτότητας όπως το Google Authenticator, Authy, η Microsoft ελέγχου ταυτότητας ή παρόμοιο στο τηλέφωνό σας.',
	USERINFO_INSTALL_APP2: 'Στη συνέχεια, σαρώστε τον κωδικό QR παρακάτω με την εφαρμογή.',
	USERINFO_INSTALL_APP3: 'Ή να δημιουργήσετε ένα νέο ρεκόρ στην εφαρμογή με το χέρι χρησιμοποιώντας αυτό το κλειδί:',
	USERINFO_INSTALL_APP4: 'Στη συνέχεια, πληκτρολογήστε τον κωδικό από την εφαρμογή κάτω.',

//	for calendar
	TEXT_MONTH_JAN: 'Ιανουάριος',
	TEXT_MONTH_FEB: 'Φεβρουάριος',
	TEXT_MONTH_MAR: 'Μάρτιος',
	TEXT_MONTH_APR: 'Απρίλιος',
	TEXT_MONTH_MAY: 'Μάιος',
	TEXT_MONTH_JUN: 'Ιούνιος',
	TEXT_MONTH_JUL: 'Ιούλιος',
	TEXT_MONTH_AUG: 'Αύγουστος',
	TEXT_MONTH_SEP: 'Σεπτέμβριος',
	TEXT_MONTH_OCT: 'Οκτώβριος',
	TEXT_MONTH_NOV: 'Νοέμβριος',
	TEXT_MONTH_DEC: 'Δεκέμβριος',
	TEXT_DAY_SU: 'ΚΥ',
	TEXT_DAY_MO: 'ΔΕ',
	TEXT_DAY_TU: 'ΤΡ',
	TEXT_DAY_WE: 'ΤΕ',
	TEXT_DAY_TH: 'ΠΕ',
	TEXT_DAY_FR: 'ΠΑ',
	TEXT_DAY_SA: 'ΣΑ',
	TEXT_TODAY: 'σήμερα',
	TEXT_SELECT_DATE: 'Επιλογή Ημερομηνίας',
	TEXT_TIME: 'Ώρα',
	TEXT_TIME_HOUR: 'Ώρα',
	TEXT_TIME_MINUTE: 'Λεπτό',
	TEXT_TIME_SECOND: 'Δευτερόλεπτο',

//	for inline message
	TEXT_INLINE_FIELD_REQUIRED: 'Απαραίτητο πεδίο',
	TEXT_INLINE_FIELD_ZIPCODE: 'Το πεδίο πρέπει να είναι ένας έγκυρος ταχυδρομικός κωδικός',
	TEXT_INLINE_FIELD_EMAIL: 'Το πεδίο πρέπει να είναι ένα έγκυρο Email',
	TEXT_INLINE_FIELD_NUMBER: 'Το πεδίο πρέπει να είναι αριθμός',
	TEXT_INLINE_FIELD_CURRENCY: 'Το πεδίο πρέπει να είναι νομισματικό',
	TEXT_INLINE_FIELD_PHONE: 'Το πεδίο πρέπει να είναι αριθμός τηλεφώνου',
	TEXT_INLINE_FIELD_PASSWORD1: 'Το πεδίο δεν πρέπει να είναι ',
	TEXT_INLINE_FIELD_PASSWORD2: 'Το πεδίο πρέπει να περιέχει τουλάχιστον 4 χαρακτήρες',
	TEXT_INLINE_FIELD_STATE: 'Το πεδίο πρέπει να είναι ονομασία νομού',
	TEXT_INLINE_FIELD_SSN: 'Το πεδίο πρέπει να είναι αριθμός κοινωνικής ασφάλισης',
	TEXT_INLINE_FIELD_DATE: 'Το πεδίο πρέπει να είναι μια έγκυρη ημερομηνία',
	TEXT_INLINE_FIELD_DATE_NOT_ALLOWED_DAY: '',
	TEXT_INLINE_FIELD_DATE_NOT_IN_INTERVAL: '',
	TEXT_INLINE_FIELD_DATE_EARLIER_THAN_START: '',
	TEXT_INLINE_FIELD_DATE_LATER_THAN_END: '',
	TEXT_INLINE_FIELD_TIME: 'Το πεδίο πρέπει να είναι μια έγκυρη ώρα, σε εικοσιτετράωρη μορφή (π.χ. 19:30)',
	TEXT_INLINE_FIELD_CC: 'Το πεδίο πρέπει να είναι ένας έγκυρος αριθμός πιστωτικής κάρτας',
	TEXT_INLINE_ERROR: 'Πραγματοποίηση λάθους',
	TEXT_INLINE_DENY_DUPLICATES: 'Το πεδίο δεν πρέπει να περιέχει διπλή τιμή',
	TEXT_INLINE_USERNAME_EXISTS1: 'Το όνομα χειριστή',
	TEXT_INLINE_USERNAME_EXISTS2: 'υπάρχει ήδη. Παρακαλώ επιλέξτε ένα άλλο όνομα.',
	TEXT_INLINE_EMAIL_ALREADY1: 'Το EMail',
	TEXT_INLINE_EMAIL_ALREADY2: 'είναι ήδη καταχωρημένο.',

	//for RTE
	TEXT_VIEW_SOURCE: 'Προβολή κώδικα',
	//for tree-like menu
	TEXT_EXPAND_ALL: 'Ανάπτυξη Όλων',
	TEXT_COLLAPSE_ALL: 'Σύμπτυξη Όλων',

	//for register page
	SEC_PWD_LEN: 'Ο κωδικός προσπέλασης θα πρέπει να είναι τουλάχιστον 777 χαρακτήρες',
	SEC_PWD_CASE: 'Ο κωδικός πρέπει να αποτελείτε από μικρά και κεφαλαία γράμματα-χαρακτήρες',
	SEC_PWD_DIGIT: 'Ο κωδικός προσπέλασης θα πρέπει να αποτελείτε από αριθμούς και σύμβολα  χαρακτήρες',
	SEC_PWD_UNIQUE: 'Ο κωδικός προσπέλασης θα πρέπει να αποτελείτε από μοναδικούς, όχι όμοιους, χαρακτήρες',
	PASSWORDS_DONT_MATCH: 'Οι κωδικοί δεν ταιριάζουν',
	SUCCES_LOGGED_IN: 'Έχετε συνδεθεί επιτυχώς.',

	//for pdf
	TEXT_PDF_BUILD1: 'Δημιουργήστε PDF',
	TEXT_PDF_BUILD2: 'Εκτελέστηκε',
	TEXT_PDF_BUILD3: 'Το αρχείο PDF δεν δημιουργήθηκε',

	CLOSE_WINDOW: 'Κλείσε το παράθυρο',
	CLOSE: 'Κλείσιμο',
	RESET: 'Επαναφορά',

	//for search options
	CONTAINS: 'Περιέχει',
	EQUALS: 'Ίσο(ν)',
	STARTS_WITH: 'Αρχή μέ',
	MORE_THAN: 'Περισσότερο από',
	LESS_THAN: 'Mικρότερο από',
	BETWEEN: 'Ανάμεσα',
	EMPTY: 'Κενό',

	NOT_CONTAINS: 'Δεν περιέχει',
	NOT_EQUALS: 'Δεν είναι ίσο',
	NOT_STARTS_WITH: 'Δεν ξεκινάει με',
	NOT_MORE_THAN: 'Δεν είναι μεγαλύτερο από',
	NOT_LESS_THAN: 'Δεν είναι μικρότερο από',
	NOT_BETWEEN: 'Δεν είναι ανάμεσα σε',
	NOT_EMPTY: 'Δεν είναι κενό',

	SEARCH_FOR: 'Εύρεση για',

	ERROR_MISSING_FILE_NAME: 'Το όνομα αρχείου δεν δόθηκε',
	ERROR_ACCEPT_FILE_TYPES: 'Ο τύπος αρχείου δεν είναι αποδεκτός',
	ERROR_MAX_FILE_SIZE: 'Το μέγεθος αρχείου είναι μεγαλύτερο από το όριο %s kbytes',
	ERROR_MIN_FILE_SIZE: 'Το μέγεθος αρχείου πρέπει να είναι μεγαλύτερο %s kbytes',
	ERROR_MAX_TOTAL_FILE_SIZE: 'Το σύνολο όλων των αρχείων είναι μεγαλύτερο από το όριο %s kbytes',
	ERROR_MAX_NUMBER_OF_FILES_ONE: 'Μπορείτε να μεταφορτώσετε μόνο ένα αρχείο',
	ERROR_MAX_NUMBER_OF_FILES_MANY: 'Μπορείτε να μεταφορτώσετε μέχρι %s αρχεία',

	TEXT_SERVER_ERROR_OCCURRED: 'Παρουσιάστηκε σφάλμα στον Σέρβερ',
	TEXT_SEE_DETAILS: 'Εμφάνιση λεπτομερειών',

	ERROR_UPLOAD: 'Η μεταφόρτωση απέτυχε',
	START_UPLOAD: 'Μεταφόρτωση',
	CANCEL: 'Ακύρωση',
	DELETE: 'Διαγραφή',

	UPLOAD_DRAG: 'Σύρτε αρχεία εδώ',

	SELECT_ALL: 'Επιλογή όλων',
	UNSELECT_ALL: 'Αναίρεση επιλογής',

	TEXT_WR_REPORT_SAVED: 'Η Αναφορά αποθηκεύτηκε',
	TEXT_WR_SOME_PROBLEM: 'Δημιουργήθηκαν προβλήματα κατά τη διαδικασία αποθήκευσης',
	TEXT_WR_CROSS_GROUP: 'Ομάδα',
	TEXT_WR_HEADER: 'Κεφαλίδα',
	TEXT_WR_CROSS_GROUP: 'Ομάδα',
	TEXT_COUNT: 'Καταμέτρηση',
	TEXT_MIN: 'Μικρότερο',
	TEXT_MAX: 'Μεγαλύτερο',
	TEXT_SUM: 'Σύνολο(ν)',
	TEXT_AVG: 'Μ.Ο.',
	TEXT_WR_TOTAL_DATA: 'Πίνακας Δεδομένων',
	TEXT_PAGE_SUMMARY: 'Σύνολο σελίδας',
	TEXT_GLOBAL_SUMMARY: 'Παγκόσμιο Σύνολο',
	TEXT_WR_SUMMARY: 'Σύνοψη',
	TEXT_FIELD: 'Πεδίο',
	TEXT_WR_NO_COLOR: 'Χωρίς χρώμα',

	TEXT_SEARCH_SAVING: 'Αποθήκευση αναζήτησης',
	TEXT_SEARCH_NAME: 'Όνομα αναζήτησης:',
	TEXT_DELETE_SEARCH_CAPTION: 'Διαγραφή αποθηκευμένης αναζήτησης',
	TEXT_DELETE_SEARCH: 'Θέλετε να διαγραφεί η αναζήτηση;',
	TEXT_YES: 'Ναι',
	TEXT_NO: 'Όχι',

	TEXT_FILTER_APPLY: 'Εφαρμογή',
	TEXT_FILTER_CLEAR: 'Καθαρισμός',
	TEXT_FILTER_MULTISELECT: 'Πολλαπλή',

	// for rights page
	AA_ADD_NEW_GROUP: 'Δημιουργία νέας ομάδας',
	AA_RENAMEGROUP: 'Μετονομασία ομάδας',
	AA_GROUP_NEW: 'Νέο Γκρουπ',
	AA_DELETEGROUP: 'Επιθυμείτε πραγματικά να διαγράψετε την ομάδα;',
	AA_COPY_PERMISS_FROM: 'Επιλέξτε την ομάδα από την οποία θα γίνει αντιγραφή των δικαιωμάτων:',
	AA_CHOOSE_COLUMNS_TO_DIPLAY: 'Επιλέξτε στήλες για εμφάνιση',
	AA_SELECT_NONE: 'Select none',
	AA_OK: 'Εντάξει',

	PREPARE_PAGE_FOR_PRINTING: 'Προετοιμασία σελίδας για εκτύπωση',

	// import page
	IMPORT_PROCESSING_RECORDS: 'Επεξεργασία εγγραφών',
	IMPORT_FAILED: 'Η εισαγωγή απέτυχε',

	LOADING_FONTS: 'Φόρτωση γραμματοσειρών',

	DATEPICKER_CLOSE: '',
	DATEPICKER_SELECT_MONTH: 'Επιλέξτε μήνα',
	DATEPICKER_NEXT_MONTH: 'Τον επόμενο μήνα',
	DATEPICKER_PREV_MONTH: 'Προηγούμενος μήνας',
	DATEPICKER_SELECT_YEAR: 'Επιλέξτε Έτος',
	DATEPICKER_NEXT_YEAR: 'Του χρόνου',
	DATEPICKER_PREV_YEAR: 'Του χρόνου',

	TODAY: 'σήμερα',
	TIME: 'Ώρα',
	TIME_HOUR: 'Ώρα',
	TIME_MINUTE: 'Λεπτό',
	SELECT_DATE: 'Επιλογή Ημερομηνίας',

	SESSION_EXPIRED_COMMENT: 'Για λόγους ασφαλείας, η συνεδρία σας θα τερματιστεί σε %seconds% δευτερόλεπτα αν δεν συνεχίσετε',

	NOW: 'τώρα',
	NOTI_SECOND: '',
	NOTI_MINUTE: 'λεπτά',
	NOTI_HOUR: 'ώρες',
	NOTI_DAY: 'μέρες',

	
	EXPORT_TO_PDF: 'Εξαγωγή σε PDF',
	EXPORT_TO_CSV: 'Εξαγωγή σε CSV',
	SAVE_AS_PNG: 'Αποθηκεύστε ως PNG',
	PRINT: 'Εκτύπωση',

	TWOFACTOR_VERIFICATION: 'Επαλήθευση δύο παραγόντων',
	EMAIL: 'Email',
	TWO_FACTOR_PARAM_EMAIL: 'Διεύθυνση ηλεκτρονικού ταχυδρομείου', 
	TWO_FACTOR_PARAM_PHONE: 'Τηλεφωνικό νούμερο', 
};

Runner.lang.customlabels = {

	prefix: 'CUSTOM_LABEL_',

	// custom labels
};