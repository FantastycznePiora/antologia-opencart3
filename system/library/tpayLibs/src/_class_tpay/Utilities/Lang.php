<?php

/*
 * Created by tpay.com
 */

namespace tpayLibs\src\_class_tpay\Utilities;

/**
 * Class Lang
 *
 * @package tpay
 */
class Lang
{
    const REGULATIONS = 'regulations';

    /**
     * Current language
     *
     * @var string
     */
    private static $lang = 'en';
    /**
     * Translation data
     *
     * @var array
     */
    private static $data = array(
        'en' => array(

            // GLOBALS
            'fee_info'      => 'Fee for using this payment method: ',
            'pay'           => 'Pay with tpay.com',
            'merchant_info' => 'Merchant info',
            'amount'        => 'Amount',
            'order'         => 'Order',
            // BLIK

            'blik_info'              => 'Type in 6 digit code and press pay to commit blik payment.',
            'blik_info2'             => 'If you want to pay with standard method, leave this field blank.',
            'blik_accept'            => 'By using this method you confirm acceptance',

            // BANK SELECTION
            'cards_and_transfers'    => 'Credit cards and bank transfers',
            'other_methods'          => 'Others',
            'accept'                 => 'I accept the',
            'regulations_url'        => self::REGULATIONS,
            self::REGULATIONS        => 'of tpay.com service',
            'acceptance_is_required' => 'Acceptance of regulations is required before payment',

            // CARD

            'card_number'     => 'Card number',
            'expiration_date' => 'Expiration date',
            'signature'       => 'For MasterCard, Visa or Discover, it\'s the last three digits
             in the signature area on the back of your card.',
            'name_on_card'    => 'Name on card',
            'name_surname'    => 'Name and surname',
            'save_card'       => 'Save my card',
            'save_card_info'  => 'Let faster payments in future. Card data is stored on external, save server.',
            'processing'      => 'Processing data, please wait...',
            'card_payment'    => 'Payment',
            'debit'           => 'Please debit my account',

            // DAC

            'transfer_details'   => 'Bank transfer details',
            'payment_amount'     => 'The amount of the payment',
            'disposable_account' => 'Disposable account number for the payment',

            // SZKWAL

            'account_number' => 'Account number',
            'payment_title'  => 'Payment title',
            'payment_method' => 'Payment method',
            'szkwal_info'    => 'Your title transfer is dedicated to you and very important for the identification of
             payment. You can create a transfer as defined in its bank to
              quickly and easily fund your account in the future',

            // WHITE LABEL

            'go_to_bank' => 'Go to bank',
        ),
        'pl' => array(

            // GLOBALS
            'fee_info' => 'Za korzystanie z p??atno??ci online sprzedawca dolicza: ',

            'pay'           => 'Zap??a?? z tpay.com',
            'merchant_info' => 'Dane sprzedawcy',
            'amount'        => 'Kwota',
            'order'         => 'Zam??wienie',

            // BLIK

            'blik_info'              => 'Wpisz 6 cyfrowy kod i naci??nij "Kupuj?? i p??ac??" aby powi??za?? transakcj?? blik.',
            'blik_info2'             => 'Je??li chcesz dokona?? tradycyjnej p??atno??ci, pozostaw to pole puste.',
            'blik_accept'            => 'Korzystaj??c z tej metody p??atno??ci o??wiadczasz, ??e akceptujesz',

            // BANK SELECTION
            'cards_and_transfers'    => 'Karty p??atnicze i przelewy',
            'other_methods'          => 'Pozosta??e',
            'accept'                 => 'Akceptuj??',
            'regulations_url'        => 'regulamin',
            self::REGULATIONS        => 'serwisu tpay.com',
            'acceptance_is_required' => 'Akceptacja regulaminu jest obowi??zkowa, przed rozpocz??ciem p??atno??ci',

            // CARD

            'card_number'     => 'Numer karty',
            'expiration_date' => 'Termin wa??no??ci',
            'signature'       => 'Dla MasterCard, Visa lub Discover, s?? to przy ostatnie
             cyfry umieszczone przy podpisie karty.',
            'name_on_card'    => 'W??a??ciciel karty',
            'name_surname'    => 'Imi?? i nazwisko',
            'save_card'       => 'Zapisz moj?? kart??',
            'save_card_info'  => 'Zezwolenie na szybsz?? p??atno???? w przysz??o??ci.
             Dane karty zostan?? zapisane na serwerze tpay',
            'processing'      => 'Przetwarzanie danych, prosz?? czeka??...',
            'card_payment'    => 'Zap??a??',
            'debit'           => 'Prosz?? obci????y?? moje konto',

            // DAC

            'transfer_details'   => 'Szczeg????y przelewu',
            'payment_amount'     => 'Kwota przelewu',
            'disposable_account' => 'Jednorazowy numer konta dla tej transakcji',

            // SZKWAL

            'account_number' => 'Numer konta',
            'payment_title'  => 'Tytu?? przelewu',
            'payment_method' => 'Spos??b p??atno??ci',
            'szkwal_info'    => 'Tw??j tytu?? przelewu jest dedykowany dla Ciebie i bardzo wa??ny dla identyfikacji wp??aty.
             Mo??esz stworzy?? przelew zdefiniowany w swoim banku, aby wygodnie i szybko zasili?? swoje
              konto w przysz??o??ci.',

            // WHITE LABEL

            'go_to_bank' => 'Przejd?? do banku',
        )
    );

    /**
     * Change current language
     *
     * @param string $lang language code
     *
     * @throws TException
     */
    public static function setLang($lang)
    {
        if (isset(static::$data[$lang])) {
            static::$lang = $lang;
        } else {
            throw new TException('No translation for this language');
        }
    }

    /**
     * Get and print translated string
     * @param $key
     */
    public static function l($key)
    {
        echo static::get($key);
    }

    /**
     * Get translated string
     *
     * @param string $key
     *
     * @throws TException
     * @return string
     */
    public static function get($key)
    {
        if (isset(static::$data[static::$lang][$key])) {
            return static::$data[static::$lang][$key];
        } else {
            throw new TException('No translation for this key');
        }
    }
}
