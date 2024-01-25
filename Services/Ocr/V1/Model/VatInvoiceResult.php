<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VatInvoiceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VatInvoiceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  增值税发票标题
    * type  增值税发票类型，可选值包括： - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - special_electronic: 增值税电子专用发票  - toll: 增值税电子普通发票（通行费）  - roll: 增值税普通发票（卷票）  - fully_digitalized_special_electronic: 全电专用发票  - fully_digitalized_normal_electronic: 全电普通发票
    * invoiceTag  增值税发票左上角标志。当“advanced_mode”设置为“true”时才返回。包含：通行费、代开。
    * sumAmount  小计金额，当传入多页PDF时返回此字段。
    * sumTax  小计税额，当传入多页PDF时返回此字段。
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * printCode  机打代码。当“advanced_mode”设置为“true”时才返回。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * province  省。
    * city  市。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * belongBuyerName  销货清单的购买方名称。 当传入图片为发票销货清单时返回此字段。
    * belongSellerName  销货清单的销售方名称。 当传入图片为发票销货清单时返回此字段。
    * belongVatCode  所属的增值税发票代码。 当传入图片为发票销货清单时返回此字段。
    * belongNumber  销货清单的开票号码。 当传入图片为发票销货清单时返回此字段。
    * belongPages  销货清单的总页码数。 当传入图片为发票销货清单时返回此字段。
    * belongCurrentPage  销货清单的当前页码。 当传入图片为发票销货清单时返回此字段。
    * belongRemarks  销货清单的备注。 当传入图片为发票销货清单时返回此字段。
    * belongIssueDate  销货清单的填开日期。 当传入图片为发票销货清单时返回此字段。
    * salesMark  是否是销货清单，可选值为： - true：输入图片是销货清单。 - false：输入图片不是销货清单。
    * belongSumAmount  销货清单的小计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSumTax  销货清单的小计税额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalAmount  销货清单的总计或者合计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalTax  销货清单的总计税额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountAmount  销货清单的折扣金额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountTax  销货清单的折扣税额。 当传入图片为发票销货清单时返回此字段。
    * belongItemList  销货清单的货物（劳务）名称列表。 当传入图片为发票销货清单时返回此字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'type' => 'string',
            'invoiceTag' => 'string',
            'sumAmount' => 'string',
            'sumTax' => 'string',
            'serialNumber' => 'string',
            'attribution' => 'string',
            'supervisionSeal' => 'string[]',
            'code' => 'string',
            'printCode' => 'string',
            'machineNumber' => 'string',
            'printNumber' => 'string',
            'checkCode' => 'string',
            'number' => 'string',
            'issueDate' => 'string',
            'encryptionBlock' => 'string',
            'buyerName' => 'string',
            'buyerId' => 'string',
            'buyerAddress' => 'string',
            'buyerBank' => 'string',
            'sellerName' => 'string',
            'sellerId' => 'string',
            'sellerAddress' => 'string',
            'sellerBank' => 'string',
            'subtotalAmount' => 'string',
            'subtotalTax' => 'string',
            'total' => 'string',
            'totalInWords' => 'string',
            'remarks' => 'string',
            'receiver' => 'string',
            'reviewer' => 'string',
            'issuer' => 'string',
            'sellerSeal' => 'string[]',
            'itemList' => '\HuaweiCloud\SDK\Ocr\V1\Model\ItemList[]',
            'province' => 'string',
            'city' => 'string',
            'confidence' => 'object',
            'textLocation' => 'object',
            'belongBuyerName' => 'string',
            'belongSellerName' => 'string',
            'belongVatCode' => 'string',
            'belongNumber' => 'string',
            'belongPages' => 'string',
            'belongCurrentPage' => 'string',
            'belongRemarks' => 'string',
            'belongIssueDate' => 'string',
            'salesMark' => 'bool',
            'belongSumAmount' => 'string',
            'belongSumTax' => 'string',
            'belongSubtotalAmount' => 'string',
            'belongSubtotalTax' => 'string',
            'belongDiscountAmount' => 'string',
            'belongDiscountTax' => 'string',
            'belongItemList' => '\HuaweiCloud\SDK\Ocr\V1\Model\BelongItemList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  增值税发票标题
    * type  增值税发票类型，可选值包括： - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - special_electronic: 增值税电子专用发票  - toll: 增值税电子普通发票（通行费）  - roll: 增值税普通发票（卷票）  - fully_digitalized_special_electronic: 全电专用发票  - fully_digitalized_normal_electronic: 全电普通发票
    * invoiceTag  增值税发票左上角标志。当“advanced_mode”设置为“true”时才返回。包含：通行费、代开。
    * sumAmount  小计金额，当传入多页PDF时返回此字段。
    * sumTax  小计税额，当传入多页PDF时返回此字段。
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * printCode  机打代码。当“advanced_mode”设置为“true”时才返回。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * province  省。
    * city  市。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * belongBuyerName  销货清单的购买方名称。 当传入图片为发票销货清单时返回此字段。
    * belongSellerName  销货清单的销售方名称。 当传入图片为发票销货清单时返回此字段。
    * belongVatCode  所属的增值税发票代码。 当传入图片为发票销货清单时返回此字段。
    * belongNumber  销货清单的开票号码。 当传入图片为发票销货清单时返回此字段。
    * belongPages  销货清单的总页码数。 当传入图片为发票销货清单时返回此字段。
    * belongCurrentPage  销货清单的当前页码。 当传入图片为发票销货清单时返回此字段。
    * belongRemarks  销货清单的备注。 当传入图片为发票销货清单时返回此字段。
    * belongIssueDate  销货清单的填开日期。 当传入图片为发票销货清单时返回此字段。
    * salesMark  是否是销货清单，可选值为： - true：输入图片是销货清单。 - false：输入图片不是销货清单。
    * belongSumAmount  销货清单的小计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSumTax  销货清单的小计税额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalAmount  销货清单的总计或者合计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalTax  销货清单的总计税额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountAmount  销货清单的折扣金额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountTax  销货清单的折扣税额。 当传入图片为发票销货清单时返回此字段。
    * belongItemList  销货清单的货物（劳务）名称列表。 当传入图片为发票销货清单时返回此字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'type' => null,
        'invoiceTag' => null,
        'sumAmount' => null,
        'sumTax' => null,
        'serialNumber' => null,
        'attribution' => null,
        'supervisionSeal' => null,
        'code' => null,
        'printCode' => null,
        'machineNumber' => null,
        'printNumber' => null,
        'checkCode' => null,
        'number' => null,
        'issueDate' => null,
        'encryptionBlock' => null,
        'buyerName' => null,
        'buyerId' => null,
        'buyerAddress' => null,
        'buyerBank' => null,
        'sellerName' => null,
        'sellerId' => null,
        'sellerAddress' => null,
        'sellerBank' => null,
        'subtotalAmount' => null,
        'subtotalTax' => null,
        'total' => null,
        'totalInWords' => null,
        'remarks' => null,
        'receiver' => null,
        'reviewer' => null,
        'issuer' => null,
        'sellerSeal' => null,
        'itemList' => null,
        'province' => null,
        'city' => null,
        'confidence' => null,
        'textLocation' => null,
        'belongBuyerName' => null,
        'belongSellerName' => null,
        'belongVatCode' => null,
        'belongNumber' => null,
        'belongPages' => null,
        'belongCurrentPage' => null,
        'belongRemarks' => null,
        'belongIssueDate' => null,
        'salesMark' => null,
        'belongSumAmount' => null,
        'belongSumTax' => null,
        'belongSubtotalAmount' => null,
        'belongSubtotalTax' => null,
        'belongDiscountAmount' => null,
        'belongDiscountTax' => null,
        'belongItemList' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * title  增值税发票标题
    * type  增值税发票类型，可选值包括： - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - special_electronic: 增值税电子专用发票  - toll: 增值税电子普通发票（通行费）  - roll: 增值税普通发票（卷票）  - fully_digitalized_special_electronic: 全电专用发票  - fully_digitalized_normal_electronic: 全电普通发票
    * invoiceTag  增值税发票左上角标志。当“advanced_mode”设置为“true”时才返回。包含：通行费、代开。
    * sumAmount  小计金额，当传入多页PDF时返回此字段。
    * sumTax  小计税额，当传入多页PDF时返回此字段。
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * printCode  机打代码。当“advanced_mode”设置为“true”时才返回。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * province  省。
    * city  市。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * belongBuyerName  销货清单的购买方名称。 当传入图片为发票销货清单时返回此字段。
    * belongSellerName  销货清单的销售方名称。 当传入图片为发票销货清单时返回此字段。
    * belongVatCode  所属的增值税发票代码。 当传入图片为发票销货清单时返回此字段。
    * belongNumber  销货清单的开票号码。 当传入图片为发票销货清单时返回此字段。
    * belongPages  销货清单的总页码数。 当传入图片为发票销货清单时返回此字段。
    * belongCurrentPage  销货清单的当前页码。 当传入图片为发票销货清单时返回此字段。
    * belongRemarks  销货清单的备注。 当传入图片为发票销货清单时返回此字段。
    * belongIssueDate  销货清单的填开日期。 当传入图片为发票销货清单时返回此字段。
    * salesMark  是否是销货清单，可选值为： - true：输入图片是销货清单。 - false：输入图片不是销货清单。
    * belongSumAmount  销货清单的小计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSumTax  销货清单的小计税额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalAmount  销货清单的总计或者合计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalTax  销货清单的总计税额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountAmount  销货清单的折扣金额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountTax  销货清单的折扣税额。 当传入图片为发票销货清单时返回此字段。
    * belongItemList  销货清单的货物（劳务）名称列表。 当传入图片为发票销货清单时返回此字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'type' => 'type',
            'invoiceTag' => 'invoice_tag',
            'sumAmount' => 'sum_amount',
            'sumTax' => 'sum_tax',
            'serialNumber' => 'serial_number',
            'attribution' => 'attribution',
            'supervisionSeal' => 'supervision_seal',
            'code' => 'code',
            'printCode' => 'print_code',
            'machineNumber' => 'machine_number',
            'printNumber' => 'print_number',
            'checkCode' => 'check_code',
            'number' => 'number',
            'issueDate' => 'issue_date',
            'encryptionBlock' => 'encryption_block',
            'buyerName' => 'buyer_name',
            'buyerId' => 'buyer_id',
            'buyerAddress' => 'buyer_address',
            'buyerBank' => 'buyer_bank',
            'sellerName' => 'seller_name',
            'sellerId' => 'seller_id',
            'sellerAddress' => 'seller_address',
            'sellerBank' => 'seller_bank',
            'subtotalAmount' => 'subtotal_amount',
            'subtotalTax' => 'subtotal_tax',
            'total' => 'total',
            'totalInWords' => 'total_in_words',
            'remarks' => 'remarks',
            'receiver' => 'receiver',
            'reviewer' => 'reviewer',
            'issuer' => 'issuer',
            'sellerSeal' => 'seller_seal',
            'itemList' => 'item_list',
            'province' => 'province',
            'city' => 'city',
            'confidence' => 'confidence',
            'textLocation' => 'text_location',
            'belongBuyerName' => 'belong_buyer_name',
            'belongSellerName' => 'belong_seller_name',
            'belongVatCode' => 'belong_vat_code',
            'belongNumber' => 'belong_number',
            'belongPages' => 'belong_pages',
            'belongCurrentPage' => 'belong_current_page',
            'belongRemarks' => 'belong_remarks',
            'belongIssueDate' => 'belong_issue_date',
            'salesMark' => 'sales_mark',
            'belongSumAmount' => 'belong_sum_amount',
            'belongSumTax' => 'belong_sum_tax',
            'belongSubtotalAmount' => 'belong_subtotal_amount',
            'belongSubtotalTax' => 'belong_subtotal_tax',
            'belongDiscountAmount' => 'belong_discount_amount',
            'belongDiscountTax' => 'belong_discount_tax',
            'belongItemList' => 'belong_item_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  增值税发票标题
    * type  增值税发票类型，可选值包括： - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - special_electronic: 增值税电子专用发票  - toll: 增值税电子普通发票（通行费）  - roll: 增值税普通发票（卷票）  - fully_digitalized_special_electronic: 全电专用发票  - fully_digitalized_normal_electronic: 全电普通发票
    * invoiceTag  增值税发票左上角标志。当“advanced_mode”设置为“true”时才返回。包含：通行费、代开。
    * sumAmount  小计金额，当传入多页PDF时返回此字段。
    * sumTax  小计税额，当传入多页PDF时返回此字段。
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * printCode  机打代码。当“advanced_mode”设置为“true”时才返回。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * province  省。
    * city  市。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * belongBuyerName  销货清单的购买方名称。 当传入图片为发票销货清单时返回此字段。
    * belongSellerName  销货清单的销售方名称。 当传入图片为发票销货清单时返回此字段。
    * belongVatCode  所属的增值税发票代码。 当传入图片为发票销货清单时返回此字段。
    * belongNumber  销货清单的开票号码。 当传入图片为发票销货清单时返回此字段。
    * belongPages  销货清单的总页码数。 当传入图片为发票销货清单时返回此字段。
    * belongCurrentPage  销货清单的当前页码。 当传入图片为发票销货清单时返回此字段。
    * belongRemarks  销货清单的备注。 当传入图片为发票销货清单时返回此字段。
    * belongIssueDate  销货清单的填开日期。 当传入图片为发票销货清单时返回此字段。
    * salesMark  是否是销货清单，可选值为： - true：输入图片是销货清单。 - false：输入图片不是销货清单。
    * belongSumAmount  销货清单的小计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSumTax  销货清单的小计税额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalAmount  销货清单的总计或者合计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalTax  销货清单的总计税额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountAmount  销货清单的折扣金额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountTax  销货清单的折扣税额。 当传入图片为发票销货清单时返回此字段。
    * belongItemList  销货清单的货物（劳务）名称列表。 当传入图片为发票销货清单时返回此字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'type' => 'setType',
            'invoiceTag' => 'setInvoiceTag',
            'sumAmount' => 'setSumAmount',
            'sumTax' => 'setSumTax',
            'serialNumber' => 'setSerialNumber',
            'attribution' => 'setAttribution',
            'supervisionSeal' => 'setSupervisionSeal',
            'code' => 'setCode',
            'printCode' => 'setPrintCode',
            'machineNumber' => 'setMachineNumber',
            'printNumber' => 'setPrintNumber',
            'checkCode' => 'setCheckCode',
            'number' => 'setNumber',
            'issueDate' => 'setIssueDate',
            'encryptionBlock' => 'setEncryptionBlock',
            'buyerName' => 'setBuyerName',
            'buyerId' => 'setBuyerId',
            'buyerAddress' => 'setBuyerAddress',
            'buyerBank' => 'setBuyerBank',
            'sellerName' => 'setSellerName',
            'sellerId' => 'setSellerId',
            'sellerAddress' => 'setSellerAddress',
            'sellerBank' => 'setSellerBank',
            'subtotalAmount' => 'setSubtotalAmount',
            'subtotalTax' => 'setSubtotalTax',
            'total' => 'setTotal',
            'totalInWords' => 'setTotalInWords',
            'remarks' => 'setRemarks',
            'receiver' => 'setReceiver',
            'reviewer' => 'setReviewer',
            'issuer' => 'setIssuer',
            'sellerSeal' => 'setSellerSeal',
            'itemList' => 'setItemList',
            'province' => 'setProvince',
            'city' => 'setCity',
            'confidence' => 'setConfidence',
            'textLocation' => 'setTextLocation',
            'belongBuyerName' => 'setBelongBuyerName',
            'belongSellerName' => 'setBelongSellerName',
            'belongVatCode' => 'setBelongVatCode',
            'belongNumber' => 'setBelongNumber',
            'belongPages' => 'setBelongPages',
            'belongCurrentPage' => 'setBelongCurrentPage',
            'belongRemarks' => 'setBelongRemarks',
            'belongIssueDate' => 'setBelongIssueDate',
            'salesMark' => 'setSalesMark',
            'belongSumAmount' => 'setBelongSumAmount',
            'belongSumTax' => 'setBelongSumTax',
            'belongSubtotalAmount' => 'setBelongSubtotalAmount',
            'belongSubtotalTax' => 'setBelongSubtotalTax',
            'belongDiscountAmount' => 'setBelongDiscountAmount',
            'belongDiscountTax' => 'setBelongDiscountTax',
            'belongItemList' => 'setBelongItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  增值税发票标题
    * type  增值税发票类型，可选值包括： - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - special_electronic: 增值税电子专用发票  - toll: 增值税电子普通发票（通行费）  - roll: 增值税普通发票（卷票）  - fully_digitalized_special_electronic: 全电专用发票  - fully_digitalized_normal_electronic: 全电普通发票
    * invoiceTag  增值税发票左上角标志。当“advanced_mode”设置为“true”时才返回。包含：通行费、代开。
    * sumAmount  小计金额，当传入多页PDF时返回此字段。
    * sumTax  小计税额，当传入多页PDF时返回此字段。
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * printCode  机打代码。当“advanced_mode”设置为“true”时才返回。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * province  省。
    * city  市。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * belongBuyerName  销货清单的购买方名称。 当传入图片为发票销货清单时返回此字段。
    * belongSellerName  销货清单的销售方名称。 当传入图片为发票销货清单时返回此字段。
    * belongVatCode  所属的增值税发票代码。 当传入图片为发票销货清单时返回此字段。
    * belongNumber  销货清单的开票号码。 当传入图片为发票销货清单时返回此字段。
    * belongPages  销货清单的总页码数。 当传入图片为发票销货清单时返回此字段。
    * belongCurrentPage  销货清单的当前页码。 当传入图片为发票销货清单时返回此字段。
    * belongRemarks  销货清单的备注。 当传入图片为发票销货清单时返回此字段。
    * belongIssueDate  销货清单的填开日期。 当传入图片为发票销货清单时返回此字段。
    * salesMark  是否是销货清单，可选值为： - true：输入图片是销货清单。 - false：输入图片不是销货清单。
    * belongSumAmount  销货清单的小计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSumTax  销货清单的小计税额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalAmount  销货清单的总计或者合计金额。 当传入图片为发票销货清单时返回此字段。
    * belongSubtotalTax  销货清单的总计税额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountAmount  销货清单的折扣金额。 当传入图片为发票销货清单时返回此字段。
    * belongDiscountTax  销货清单的折扣税额。 当传入图片为发票销货清单时返回此字段。
    * belongItemList  销货清单的货物（劳务）名称列表。 当传入图片为发票销货清单时返回此字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'type' => 'getType',
            'invoiceTag' => 'getInvoiceTag',
            'sumAmount' => 'getSumAmount',
            'sumTax' => 'getSumTax',
            'serialNumber' => 'getSerialNumber',
            'attribution' => 'getAttribution',
            'supervisionSeal' => 'getSupervisionSeal',
            'code' => 'getCode',
            'printCode' => 'getPrintCode',
            'machineNumber' => 'getMachineNumber',
            'printNumber' => 'getPrintNumber',
            'checkCode' => 'getCheckCode',
            'number' => 'getNumber',
            'issueDate' => 'getIssueDate',
            'encryptionBlock' => 'getEncryptionBlock',
            'buyerName' => 'getBuyerName',
            'buyerId' => 'getBuyerId',
            'buyerAddress' => 'getBuyerAddress',
            'buyerBank' => 'getBuyerBank',
            'sellerName' => 'getSellerName',
            'sellerId' => 'getSellerId',
            'sellerAddress' => 'getSellerAddress',
            'sellerBank' => 'getSellerBank',
            'subtotalAmount' => 'getSubtotalAmount',
            'subtotalTax' => 'getSubtotalTax',
            'total' => 'getTotal',
            'totalInWords' => 'getTotalInWords',
            'remarks' => 'getRemarks',
            'receiver' => 'getReceiver',
            'reviewer' => 'getReviewer',
            'issuer' => 'getIssuer',
            'sellerSeal' => 'getSellerSeal',
            'itemList' => 'getItemList',
            'province' => 'getProvince',
            'city' => 'getCity',
            'confidence' => 'getConfidence',
            'textLocation' => 'getTextLocation',
            'belongBuyerName' => 'getBelongBuyerName',
            'belongSellerName' => 'getBelongSellerName',
            'belongVatCode' => 'getBelongVatCode',
            'belongNumber' => 'getBelongNumber',
            'belongPages' => 'getBelongPages',
            'belongCurrentPage' => 'getBelongCurrentPage',
            'belongRemarks' => 'getBelongRemarks',
            'belongIssueDate' => 'getBelongIssueDate',
            'salesMark' => 'getSalesMark',
            'belongSumAmount' => 'getBelongSumAmount',
            'belongSumTax' => 'getBelongSumTax',
            'belongSubtotalAmount' => 'getBelongSubtotalAmount',
            'belongSubtotalTax' => 'getBelongSubtotalTax',
            'belongDiscountAmount' => 'getBelongDiscountAmount',
            'belongDiscountTax' => 'getBelongDiscountTax',
            'belongItemList' => 'getBelongItemList'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['invoiceTag'] = isset($data['invoiceTag']) ? $data['invoiceTag'] : null;
        $this->container['sumAmount'] = isset($data['sumAmount']) ? $data['sumAmount'] : null;
        $this->container['sumTax'] = isset($data['sumTax']) ? $data['sumTax'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['attribution'] = isset($data['attribution']) ? $data['attribution'] : null;
        $this->container['supervisionSeal'] = isset($data['supervisionSeal']) ? $data['supervisionSeal'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['printCode'] = isset($data['printCode']) ? $data['printCode'] : null;
        $this->container['machineNumber'] = isset($data['machineNumber']) ? $data['machineNumber'] : null;
        $this->container['printNumber'] = isset($data['printNumber']) ? $data['printNumber'] : null;
        $this->container['checkCode'] = isset($data['checkCode']) ? $data['checkCode'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['encryptionBlock'] = isset($data['encryptionBlock']) ? $data['encryptionBlock'] : null;
        $this->container['buyerName'] = isset($data['buyerName']) ? $data['buyerName'] : null;
        $this->container['buyerId'] = isset($data['buyerId']) ? $data['buyerId'] : null;
        $this->container['buyerAddress'] = isset($data['buyerAddress']) ? $data['buyerAddress'] : null;
        $this->container['buyerBank'] = isset($data['buyerBank']) ? $data['buyerBank'] : null;
        $this->container['sellerName'] = isset($data['sellerName']) ? $data['sellerName'] : null;
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['sellerAddress'] = isset($data['sellerAddress']) ? $data['sellerAddress'] : null;
        $this->container['sellerBank'] = isset($data['sellerBank']) ? $data['sellerBank'] : null;
        $this->container['subtotalAmount'] = isset($data['subtotalAmount']) ? $data['subtotalAmount'] : null;
        $this->container['subtotalTax'] = isset($data['subtotalTax']) ? $data['subtotalTax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalInWords'] = isset($data['totalInWords']) ? $data['totalInWords'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['sellerSeal'] = isset($data['sellerSeal']) ? $data['sellerSeal'] : null;
        $this->container['itemList'] = isset($data['itemList']) ? $data['itemList'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['belongBuyerName'] = isset($data['belongBuyerName']) ? $data['belongBuyerName'] : null;
        $this->container['belongSellerName'] = isset($data['belongSellerName']) ? $data['belongSellerName'] : null;
        $this->container['belongVatCode'] = isset($data['belongVatCode']) ? $data['belongVatCode'] : null;
        $this->container['belongNumber'] = isset($data['belongNumber']) ? $data['belongNumber'] : null;
        $this->container['belongPages'] = isset($data['belongPages']) ? $data['belongPages'] : null;
        $this->container['belongCurrentPage'] = isset($data['belongCurrentPage']) ? $data['belongCurrentPage'] : null;
        $this->container['belongRemarks'] = isset($data['belongRemarks']) ? $data['belongRemarks'] : null;
        $this->container['belongIssueDate'] = isset($data['belongIssueDate']) ? $data['belongIssueDate'] : null;
        $this->container['salesMark'] = isset($data['salesMark']) ? $data['salesMark'] : null;
        $this->container['belongSumAmount'] = isset($data['belongSumAmount']) ? $data['belongSumAmount'] : null;
        $this->container['belongSumTax'] = isset($data['belongSumTax']) ? $data['belongSumTax'] : null;
        $this->container['belongSubtotalAmount'] = isset($data['belongSubtotalAmount']) ? $data['belongSubtotalAmount'] : null;
        $this->container['belongSubtotalTax'] = isset($data['belongSubtotalTax']) ? $data['belongSubtotalTax'] : null;
        $this->container['belongDiscountAmount'] = isset($data['belongDiscountAmount']) ? $data['belongDiscountAmount'] : null;
        $this->container['belongDiscountTax'] = isset($data['belongDiscountTax']) ? $data['belongDiscountTax'] : null;
        $this->container['belongItemList'] = isset($data['belongItemList']) ? $data['belongItemList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets title
    *  增值税发票标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 增值税发票标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets type
    *  增值税发票类型，可选值包括： - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - special_electronic: 增值税电子专用发票  - toll: 增值税电子普通发票（通行费）  - roll: 增值税普通发票（卷票）  - fully_digitalized_special_electronic: 全电专用发票  - fully_digitalized_normal_electronic: 全电普通发票
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 增值税发票类型，可选值包括： - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - special_electronic: 增值税电子专用发票  - toll: 增值税电子普通发票（通行费）  - roll: 增值税普通发票（卷票）  - fully_digitalized_special_electronic: 全电专用发票  - fully_digitalized_normal_electronic: 全电普通发票
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets invoiceTag
    *  增值税发票左上角标志。当“advanced_mode”设置为“true”时才返回。包含：通行费、代开。
    *
    * @return string|null
    */
    public function getInvoiceTag()
    {
        return $this->container['invoiceTag'];
    }

    /**
    * Sets invoiceTag
    *
    * @param string|null $invoiceTag 增值税发票左上角标志。当“advanced_mode”设置为“true”时才返回。包含：通行费、代开。
    *
    * @return $this
    */
    public function setInvoiceTag($invoiceTag)
    {
        $this->container['invoiceTag'] = $invoiceTag;
        return $this;
    }

    /**
    * Gets sumAmount
    *  小计金额，当传入多页PDF时返回此字段。
    *
    * @return string|null
    */
    public function getSumAmount()
    {
        return $this->container['sumAmount'];
    }

    /**
    * Sets sumAmount
    *
    * @param string|null $sumAmount 小计金额，当传入多页PDF时返回此字段。
    *
    * @return $this
    */
    public function setSumAmount($sumAmount)
    {
        $this->container['sumAmount'] = $sumAmount;
        return $this;
    }

    /**
    * Gets sumTax
    *  小计税额，当传入多页PDF时返回此字段。
    *
    * @return string|null
    */
    public function getSumTax()
    {
        return $this->container['sumTax'];
    }

    /**
    * Sets sumTax
    *
    * @param string|null $sumTax 小计税额，当传入多页PDF时返回此字段。
    *
    * @return $this
    */
    public function setSumTax($sumTax)
    {
        $this->container['sumTax'] = $sumTax;
        return $this;
    }

    /**
    * Gets serialNumber
    *  发票联次。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 发票联次。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets attribution
    *  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getAttribution()
    {
        return $this->container['attribution'];
    }

    /**
    * Sets attribution
    *
    * @param string|null $attribution 发票归属地。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setAttribution($attribution)
    {
        $this->container['attribution'] = $attribution;
        return $this;
    }

    /**
    * Gets supervisionSeal
    *  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string[]|null
    */
    public function getSupervisionSeal()
    {
        return $this->container['supervisionSeal'];
    }

    /**
    * Sets supervisionSeal
    *
    * @param string[]|null $supervisionSeal 发票监制章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setSupervisionSeal($supervisionSeal)
    {
        $this->container['supervisionSeal'] = $supervisionSeal;
        return $this;
    }

    /**
    * Gets code
    *  发票代码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 发票代码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets printCode
    *  机打代码。当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getPrintCode()
    {
        return $this->container['printCode'];
    }

    /**
    * Sets printCode
    *
    * @param string|null $printCode 机打代码。当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setPrintCode($printCode)
    {
        $this->container['printCode'] = $printCode;
        return $this;
    }

    /**
    * Gets machineNumber
    *  机器编号。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getMachineNumber()
    {
        return $this->container['machineNumber'];
    }

    /**
    * Sets machineNumber
    *
    * @param string|null $machineNumber 机器编号。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setMachineNumber($machineNumber)
    {
        $this->container['machineNumber'] = $machineNumber;
        return $this;
    }

    /**
    * Gets printNumber
    *  机打号码。 当“advanced_mode”设置为“true”时才返回
    *
    * @return string|null
    */
    public function getPrintNumber()
    {
        return $this->container['printNumber'];
    }

    /**
    * Sets printNumber
    *
    * @param string|null $printNumber 机打号码。 当“advanced_mode”设置为“true”时才返回
    *
    * @return $this
    */
    public function setPrintNumber($printNumber)
    {
        $this->container['printNumber'] = $printNumber;
        return $this;
    }

    /**
    * Gets checkCode
    *  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    *
    * @return string|null
    */
    public function getCheckCode()
    {
        return $this->container['checkCode'];
    }

    /**
    * Sets checkCode
    *
    * @param string|null $checkCode 发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    *
    * @return $this
    */
    public function setCheckCode($checkCode)
    {
        $this->container['checkCode'] = $checkCode;
        return $this;
    }

    /**
    * Gets number
    *  发票号码。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 发票号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets issueDate
    *  开票日期。
    *
    * @return string|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string|null $issueDate 开票日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets encryptionBlock
    *  密码区。
    *
    * @return string|null
    */
    public function getEncryptionBlock()
    {
        return $this->container['encryptionBlock'];
    }

    /**
    * Sets encryptionBlock
    *
    * @param string|null $encryptionBlock 密码区。
    *
    * @return $this
    */
    public function setEncryptionBlock($encryptionBlock)
    {
        $this->container['encryptionBlock'] = $encryptionBlock;
        return $this;
    }

    /**
    * Gets buyerName
    *  购买方名称。
    *
    * @return string|null
    */
    public function getBuyerName()
    {
        return $this->container['buyerName'];
    }

    /**
    * Sets buyerName
    *
    * @param string|null $buyerName 购买方名称。
    *
    * @return $this
    */
    public function setBuyerName($buyerName)
    {
        $this->container['buyerName'] = $buyerName;
        return $this;
    }

    /**
    * Gets buyerId
    *  购买方纳税人识别号。
    *
    * @return string|null
    */
    public function getBuyerId()
    {
        return $this->container['buyerId'];
    }

    /**
    * Sets buyerId
    *
    * @param string|null $buyerId 购买方纳税人识别号。
    *
    * @return $this
    */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;
        return $this;
    }

    /**
    * Gets buyerAddress
    *  购买方地址、电话。
    *
    * @return string|null
    */
    public function getBuyerAddress()
    {
        return $this->container['buyerAddress'];
    }

    /**
    * Sets buyerAddress
    *
    * @param string|null $buyerAddress 购买方地址、电话。
    *
    * @return $this
    */
    public function setBuyerAddress($buyerAddress)
    {
        $this->container['buyerAddress'] = $buyerAddress;
        return $this;
    }

    /**
    * Gets buyerBank
    *  购买方开户行及帐号。
    *
    * @return string|null
    */
    public function getBuyerBank()
    {
        return $this->container['buyerBank'];
    }

    /**
    * Sets buyerBank
    *
    * @param string|null $buyerBank 购买方开户行及帐号。
    *
    * @return $this
    */
    public function setBuyerBank($buyerBank)
    {
        $this->container['buyerBank'] = $buyerBank;
        return $this;
    }

    /**
    * Gets sellerName
    *  销售方名称。
    *
    * @return string|null
    */
    public function getSellerName()
    {
        return $this->container['sellerName'];
    }

    /**
    * Sets sellerName
    *
    * @param string|null $sellerName 销售方名称。
    *
    * @return $this
    */
    public function setSellerName($sellerName)
    {
        $this->container['sellerName'] = $sellerName;
        return $this;
    }

    /**
    * Gets sellerId
    *  销售方纳税人识别号。
    *
    * @return string|null
    */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
    * Sets sellerId
    *
    * @param string|null $sellerId 销售方纳税人识别号。
    *
    * @return $this
    */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;
        return $this;
    }

    /**
    * Gets sellerAddress
    *  销售方地址、电话。
    *
    * @return string|null
    */
    public function getSellerAddress()
    {
        return $this->container['sellerAddress'];
    }

    /**
    * Sets sellerAddress
    *
    * @param string|null $sellerAddress 销售方地址、电话。
    *
    * @return $this
    */
    public function setSellerAddress($sellerAddress)
    {
        $this->container['sellerAddress'] = $sellerAddress;
        return $this;
    }

    /**
    * Gets sellerBank
    *  销售方开户行及帐号。
    *
    * @return string|null
    */
    public function getSellerBank()
    {
        return $this->container['sellerBank'];
    }

    /**
    * Sets sellerBank
    *
    * @param string|null $sellerBank 销售方开户行及帐号。
    *
    * @return $this
    */
    public function setSellerBank($sellerBank)
    {
        $this->container['sellerBank'] = $sellerBank;
        return $this;
    }

    /**
    * Gets subtotalAmount
    *  合计金额。
    *
    * @return string|null
    */
    public function getSubtotalAmount()
    {
        return $this->container['subtotalAmount'];
    }

    /**
    * Sets subtotalAmount
    *
    * @param string|null $subtotalAmount 合计金额。
    *
    * @return $this
    */
    public function setSubtotalAmount($subtotalAmount)
    {
        $this->container['subtotalAmount'] = $subtotalAmount;
        return $this;
    }

    /**
    * Gets subtotalTax
    *  合计税额。
    *
    * @return string|null
    */
    public function getSubtotalTax()
    {
        return $this->container['subtotalTax'];
    }

    /**
    * Sets subtotalTax
    *
    * @param string|null $subtotalTax 合计税额。
    *
    * @return $this
    */
    public function setSubtotalTax($subtotalTax)
    {
        $this->container['subtotalTax'] = $subtotalTax;
        return $this;
    }

    /**
    * Gets total
    *  价税合计。
    *
    * @return string|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param string|null $total 价税合计。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets totalInWords
    *  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getTotalInWords()
    {
        return $this->container['totalInWords'];
    }

    /**
    * Sets totalInWords
    *
    * @param string|null $totalInWords 价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setTotalInWords($totalInWords)
    {
        $this->container['totalInWords'] = $totalInWords;
        return $this;
    }

    /**
    * Gets remarks
    *  备注。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets receiver
    *  收款人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
    * Sets receiver
    *
    * @param string|null $receiver 收款人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;
        return $this;
    }

    /**
    * Gets reviewer
    *  复核。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param string|null $reviewer 复核。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets issuer
    *  开票人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string|null $issuer 开票人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets sellerSeal
    *  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string[]|null
    */
    public function getSellerSeal()
    {
        return $this->container['sellerSeal'];
    }

    /**
    * Sets sellerSeal
    *
    * @param string[]|null $sellerSeal 销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setSellerSeal($sellerSeal)
    {
        $this->container['sellerSeal'] = $sellerSeal;
        return $this;
    }

    /**
    * Gets itemList
    *  货物或应税劳务列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ItemList[]|null
    */
    public function getItemList()
    {
        return $this->container['itemList'];
    }

    /**
    * Sets itemList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ItemList[]|null $itemList 货物或应税劳务列表。
    *
    * @return $this
    */
    public function setItemList($itemList)
    {
        $this->container['itemList'] = $itemList;
        return $this;
    }

    /**
    * Gets province
    *  省。
    *
    * @return string|null
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string|null $province 省。
    *
    * @return $this
    */
    public function setProvince($province)
    {
        $this->container['province'] = $province;
        return $this;
    }

    /**
    * Gets city
    *  市。
    *
    * @return string|null
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string|null $city 市。
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets confidence
    *  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets textLocation
    *  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Gets belongBuyerName
    *  销货清单的购买方名称。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongBuyerName()
    {
        return $this->container['belongBuyerName'];
    }

    /**
    * Sets belongBuyerName
    *
    * @param string|null $belongBuyerName 销货清单的购买方名称。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongBuyerName($belongBuyerName)
    {
        $this->container['belongBuyerName'] = $belongBuyerName;
        return $this;
    }

    /**
    * Gets belongSellerName
    *  销货清单的销售方名称。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongSellerName()
    {
        return $this->container['belongSellerName'];
    }

    /**
    * Sets belongSellerName
    *
    * @param string|null $belongSellerName 销货清单的销售方名称。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongSellerName($belongSellerName)
    {
        $this->container['belongSellerName'] = $belongSellerName;
        return $this;
    }

    /**
    * Gets belongVatCode
    *  所属的增值税发票代码。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongVatCode()
    {
        return $this->container['belongVatCode'];
    }

    /**
    * Sets belongVatCode
    *
    * @param string|null $belongVatCode 所属的增值税发票代码。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongVatCode($belongVatCode)
    {
        $this->container['belongVatCode'] = $belongVatCode;
        return $this;
    }

    /**
    * Gets belongNumber
    *  销货清单的开票号码。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongNumber()
    {
        return $this->container['belongNumber'];
    }

    /**
    * Sets belongNumber
    *
    * @param string|null $belongNumber 销货清单的开票号码。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongNumber($belongNumber)
    {
        $this->container['belongNumber'] = $belongNumber;
        return $this;
    }

    /**
    * Gets belongPages
    *  销货清单的总页码数。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongPages()
    {
        return $this->container['belongPages'];
    }

    /**
    * Sets belongPages
    *
    * @param string|null $belongPages 销货清单的总页码数。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongPages($belongPages)
    {
        $this->container['belongPages'] = $belongPages;
        return $this;
    }

    /**
    * Gets belongCurrentPage
    *  销货清单的当前页码。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongCurrentPage()
    {
        return $this->container['belongCurrentPage'];
    }

    /**
    * Sets belongCurrentPage
    *
    * @param string|null $belongCurrentPage 销货清单的当前页码。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongCurrentPage($belongCurrentPage)
    {
        $this->container['belongCurrentPage'] = $belongCurrentPage;
        return $this;
    }

    /**
    * Gets belongRemarks
    *  销货清单的备注。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongRemarks()
    {
        return $this->container['belongRemarks'];
    }

    /**
    * Sets belongRemarks
    *
    * @param string|null $belongRemarks 销货清单的备注。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongRemarks($belongRemarks)
    {
        $this->container['belongRemarks'] = $belongRemarks;
        return $this;
    }

    /**
    * Gets belongIssueDate
    *  销货清单的填开日期。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongIssueDate()
    {
        return $this->container['belongIssueDate'];
    }

    /**
    * Sets belongIssueDate
    *
    * @param string|null $belongIssueDate 销货清单的填开日期。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongIssueDate($belongIssueDate)
    {
        $this->container['belongIssueDate'] = $belongIssueDate;
        return $this;
    }

    /**
    * Gets salesMark
    *  是否是销货清单，可选值为： - true：输入图片是销货清单。 - false：输入图片不是销货清单。
    *
    * @return bool|null
    */
    public function getSalesMark()
    {
        return $this->container['salesMark'];
    }

    /**
    * Sets salesMark
    *
    * @param bool|null $salesMark 是否是销货清单，可选值为： - true：输入图片是销货清单。 - false：输入图片不是销货清单。
    *
    * @return $this
    */
    public function setSalesMark($salesMark)
    {
        $this->container['salesMark'] = $salesMark;
        return $this;
    }

    /**
    * Gets belongSumAmount
    *  销货清单的小计金额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongSumAmount()
    {
        return $this->container['belongSumAmount'];
    }

    /**
    * Sets belongSumAmount
    *
    * @param string|null $belongSumAmount 销货清单的小计金额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongSumAmount($belongSumAmount)
    {
        $this->container['belongSumAmount'] = $belongSumAmount;
        return $this;
    }

    /**
    * Gets belongSumTax
    *  销货清单的小计税额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongSumTax()
    {
        return $this->container['belongSumTax'];
    }

    /**
    * Sets belongSumTax
    *
    * @param string|null $belongSumTax 销货清单的小计税额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongSumTax($belongSumTax)
    {
        $this->container['belongSumTax'] = $belongSumTax;
        return $this;
    }

    /**
    * Gets belongSubtotalAmount
    *  销货清单的总计或者合计金额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongSubtotalAmount()
    {
        return $this->container['belongSubtotalAmount'];
    }

    /**
    * Sets belongSubtotalAmount
    *
    * @param string|null $belongSubtotalAmount 销货清单的总计或者合计金额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongSubtotalAmount($belongSubtotalAmount)
    {
        $this->container['belongSubtotalAmount'] = $belongSubtotalAmount;
        return $this;
    }

    /**
    * Gets belongSubtotalTax
    *  销货清单的总计税额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongSubtotalTax()
    {
        return $this->container['belongSubtotalTax'];
    }

    /**
    * Sets belongSubtotalTax
    *
    * @param string|null $belongSubtotalTax 销货清单的总计税额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongSubtotalTax($belongSubtotalTax)
    {
        $this->container['belongSubtotalTax'] = $belongSubtotalTax;
        return $this;
    }

    /**
    * Gets belongDiscountAmount
    *  销货清单的折扣金额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongDiscountAmount()
    {
        return $this->container['belongDiscountAmount'];
    }

    /**
    * Sets belongDiscountAmount
    *
    * @param string|null $belongDiscountAmount 销货清单的折扣金额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongDiscountAmount($belongDiscountAmount)
    {
        $this->container['belongDiscountAmount'] = $belongDiscountAmount;
        return $this;
    }

    /**
    * Gets belongDiscountTax
    *  销货清单的折扣税额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return string|null
    */
    public function getBelongDiscountTax()
    {
        return $this->container['belongDiscountTax'];
    }

    /**
    * Sets belongDiscountTax
    *
    * @param string|null $belongDiscountTax 销货清单的折扣税额。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongDiscountTax($belongDiscountTax)
    {
        $this->container['belongDiscountTax'] = $belongDiscountTax;
        return $this;
    }

    /**
    * Gets belongItemList
    *  销货清单的货物（劳务）名称列表。 当传入图片为发票销货清单时返回此字段。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\BelongItemList[]|null
    */
    public function getBelongItemList()
    {
        return $this->container['belongItemList'];
    }

    /**
    * Sets belongItemList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\BelongItemList[]|null $belongItemList 销货清单的货物（劳务）名称列表。 当传入图片为发票销货清单时返回此字段。
    *
    * @return $this
    */
    public function setBelongItemList($belongItemList)
    {
        $this->container['belongItemList'] = $belongItemList;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

