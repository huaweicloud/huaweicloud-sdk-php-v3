<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrainTicketResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrainTicketResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价，当为退票凭证时，表示退票费。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  标识信息，包含始发改签、退票、差额退票等。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * invoiceStyle  类型。包含以下几种类型： - paper：纸质火车票 - electronic：铁路电子客票 - refund_old：退票费报销凭证 - refund_new：纸质火车票退票凭证  - refund_electronic：铁路电子客票退票凭证
    * issueDate  开票时间
    * discountMark  打折标识
    * serialNumber  电子客票号
    * taxAmount  税金价格
    * taxRate  税率
    * airConditioning  是否是空调车厢
    * originalInvoiceNumber  原发票号码
    * unifiedSocialCreditCode  统一社会信用号码
    * buyerName  购买方名称
    * totalAmountExcludingTax  不含税价格
    * invoiceNumber  发票号码
    * sealMark  是否有印章，True表示有印章，False表示不含印章，字段默认为False
    * title  标题
    * area  地区
    * receiptNumber  收据编码
    * amountInFigures  小写票据金额
    * amountInWords  大写票据金额
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。  > 说明：输入数据格式是OFD时，返回的字段坐标为空列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketId' => 'string',
            'checkPort' => 'string',
            'trainNumber' => 'string',
            'departureStation' => 'string',
            'destinationStation' => 'string',
            'departureStationEn' => 'string',
            'destinationStationEn' => 'string',
            'departureTime' => 'string',
            'seatNumber' => 'string',
            'ticketPrice' => 'string',
            'saleMethod' => 'string',
            'seatCategory' => 'string',
            'ticketChanging' => 'string',
            'idNumber' => 'string',
            'name' => 'string',
            'logId' => 'string',
            'saleLocation' => 'string',
            'invoiceStyle' => 'string',
            'issueDate' => 'string',
            'discountMark' => 'string',
            'serialNumber' => 'string',
            'taxAmount' => 'string',
            'taxRate' => 'string',
            'airConditioning' => 'string',
            'originalInvoiceNumber' => 'string',
            'unifiedSocialCreditCode' => 'string',
            'buyerName' => 'string',
            'totalAmountExcludingTax' => 'string',
            'invoiceNumber' => 'string',
            'sealMark' => 'bool',
            'title' => 'string',
            'area' => 'string',
            'receiptNumber' => 'string',
            'amountInFigures' => 'string',
            'amountInWords' => 'string',
            'confidence' => 'object',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价，当为退票凭证时，表示退票费。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  标识信息，包含始发改签、退票、差额退票等。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * invoiceStyle  类型。包含以下几种类型： - paper：纸质火车票 - electronic：铁路电子客票 - refund_old：退票费报销凭证 - refund_new：纸质火车票退票凭证  - refund_electronic：铁路电子客票退票凭证
    * issueDate  开票时间
    * discountMark  打折标识
    * serialNumber  电子客票号
    * taxAmount  税金价格
    * taxRate  税率
    * airConditioning  是否是空调车厢
    * originalInvoiceNumber  原发票号码
    * unifiedSocialCreditCode  统一社会信用号码
    * buyerName  购买方名称
    * totalAmountExcludingTax  不含税价格
    * invoiceNumber  发票号码
    * sealMark  是否有印章，True表示有印章，False表示不含印章，字段默认为False
    * title  标题
    * area  地区
    * receiptNumber  收据编码
    * amountInFigures  小写票据金额
    * amountInWords  大写票据金额
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。  > 说明：输入数据格式是OFD时，返回的字段坐标为空列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketId' => null,
        'checkPort' => null,
        'trainNumber' => null,
        'departureStation' => null,
        'destinationStation' => null,
        'departureStationEn' => null,
        'destinationStationEn' => null,
        'departureTime' => null,
        'seatNumber' => null,
        'ticketPrice' => null,
        'saleMethod' => null,
        'seatCategory' => null,
        'ticketChanging' => null,
        'idNumber' => null,
        'name' => null,
        'logId' => null,
        'saleLocation' => null,
        'invoiceStyle' => null,
        'issueDate' => null,
        'discountMark' => null,
        'serialNumber' => null,
        'taxAmount' => null,
        'taxRate' => null,
        'airConditioning' => null,
        'originalInvoiceNumber' => null,
        'unifiedSocialCreditCode' => null,
        'buyerName' => null,
        'totalAmountExcludingTax' => null,
        'invoiceNumber' => null,
        'sealMark' => null,
        'title' => null,
        'area' => null,
        'receiptNumber' => null,
        'amountInFigures' => null,
        'amountInWords' => null,
        'confidence' => null,
        'textLocation' => null
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
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价，当为退票凭证时，表示退票费。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  标识信息，包含始发改签、退票、差额退票等。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * invoiceStyle  类型。包含以下几种类型： - paper：纸质火车票 - electronic：铁路电子客票 - refund_old：退票费报销凭证 - refund_new：纸质火车票退票凭证  - refund_electronic：铁路电子客票退票凭证
    * issueDate  开票时间
    * discountMark  打折标识
    * serialNumber  电子客票号
    * taxAmount  税金价格
    * taxRate  税率
    * airConditioning  是否是空调车厢
    * originalInvoiceNumber  原发票号码
    * unifiedSocialCreditCode  统一社会信用号码
    * buyerName  购买方名称
    * totalAmountExcludingTax  不含税价格
    * invoiceNumber  发票号码
    * sealMark  是否有印章，True表示有印章，False表示不含印章，字段默认为False
    * title  标题
    * area  地区
    * receiptNumber  收据编码
    * amountInFigures  小写票据金额
    * amountInWords  大写票据金额
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。  > 说明：输入数据格式是OFD时，返回的字段坐标为空列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketId' => 'ticket_id',
            'checkPort' => 'check_port',
            'trainNumber' => 'train_number',
            'departureStation' => 'departure_station',
            'destinationStation' => 'destination_station',
            'departureStationEn' => 'departure_station_en',
            'destinationStationEn' => 'destination_station_en',
            'departureTime' => 'departure_time',
            'seatNumber' => 'seat_number',
            'ticketPrice' => 'ticket_price',
            'saleMethod' => 'sale_method',
            'seatCategory' => 'seat_category',
            'ticketChanging' => 'ticket_changing',
            'idNumber' => 'id_number',
            'name' => 'name',
            'logId' => 'log_id',
            'saleLocation' => 'sale_location',
            'invoiceStyle' => 'invoice_style',
            'issueDate' => 'issue_date',
            'discountMark' => 'discount_mark',
            'serialNumber' => 'serial_number',
            'taxAmount' => 'tax_amount',
            'taxRate' => 'tax_rate',
            'airConditioning' => 'air_conditioning',
            'originalInvoiceNumber' => 'original_invoice_number',
            'unifiedSocialCreditCode' => 'unified_social_credit_code',
            'buyerName' => 'buyer_name',
            'totalAmountExcludingTax' => 'total_amount_excluding_tax',
            'invoiceNumber' => 'invoice_number',
            'sealMark' => 'seal_mark',
            'title' => 'title',
            'area' => 'area',
            'receiptNumber' => 'receipt_number',
            'amountInFigures' => 'amount_in_figures',
            'amountInWords' => 'amount_in_words',
            'confidence' => 'confidence',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价，当为退票凭证时，表示退票费。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  标识信息，包含始发改签、退票、差额退票等。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * invoiceStyle  类型。包含以下几种类型： - paper：纸质火车票 - electronic：铁路电子客票 - refund_old：退票费报销凭证 - refund_new：纸质火车票退票凭证  - refund_electronic：铁路电子客票退票凭证
    * issueDate  开票时间
    * discountMark  打折标识
    * serialNumber  电子客票号
    * taxAmount  税金价格
    * taxRate  税率
    * airConditioning  是否是空调车厢
    * originalInvoiceNumber  原发票号码
    * unifiedSocialCreditCode  统一社会信用号码
    * buyerName  购买方名称
    * totalAmountExcludingTax  不含税价格
    * invoiceNumber  发票号码
    * sealMark  是否有印章，True表示有印章，False表示不含印章，字段默认为False
    * title  标题
    * area  地区
    * receiptNumber  收据编码
    * amountInFigures  小写票据金额
    * amountInWords  大写票据金额
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。  > 说明：输入数据格式是OFD时，返回的字段坐标为空列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketId' => 'setTicketId',
            'checkPort' => 'setCheckPort',
            'trainNumber' => 'setTrainNumber',
            'departureStation' => 'setDepartureStation',
            'destinationStation' => 'setDestinationStation',
            'departureStationEn' => 'setDepartureStationEn',
            'destinationStationEn' => 'setDestinationStationEn',
            'departureTime' => 'setDepartureTime',
            'seatNumber' => 'setSeatNumber',
            'ticketPrice' => 'setTicketPrice',
            'saleMethod' => 'setSaleMethod',
            'seatCategory' => 'setSeatCategory',
            'ticketChanging' => 'setTicketChanging',
            'idNumber' => 'setIdNumber',
            'name' => 'setName',
            'logId' => 'setLogId',
            'saleLocation' => 'setSaleLocation',
            'invoiceStyle' => 'setInvoiceStyle',
            'issueDate' => 'setIssueDate',
            'discountMark' => 'setDiscountMark',
            'serialNumber' => 'setSerialNumber',
            'taxAmount' => 'setTaxAmount',
            'taxRate' => 'setTaxRate',
            'airConditioning' => 'setAirConditioning',
            'originalInvoiceNumber' => 'setOriginalInvoiceNumber',
            'unifiedSocialCreditCode' => 'setUnifiedSocialCreditCode',
            'buyerName' => 'setBuyerName',
            'totalAmountExcludingTax' => 'setTotalAmountExcludingTax',
            'invoiceNumber' => 'setInvoiceNumber',
            'sealMark' => 'setSealMark',
            'title' => 'setTitle',
            'area' => 'setArea',
            'receiptNumber' => 'setReceiptNumber',
            'amountInFigures' => 'setAmountInFigures',
            'amountInWords' => 'setAmountInWords',
            'confidence' => 'setConfidence',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价，当为退票凭证时，表示退票费。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  标识信息，包含始发改签、退票、差额退票等。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * invoiceStyle  类型。包含以下几种类型： - paper：纸质火车票 - electronic：铁路电子客票 - refund_old：退票费报销凭证 - refund_new：纸质火车票退票凭证  - refund_electronic：铁路电子客票退票凭证
    * issueDate  开票时间
    * discountMark  打折标识
    * serialNumber  电子客票号
    * taxAmount  税金价格
    * taxRate  税率
    * airConditioning  是否是空调车厢
    * originalInvoiceNumber  原发票号码
    * unifiedSocialCreditCode  统一社会信用号码
    * buyerName  购买方名称
    * totalAmountExcludingTax  不含税价格
    * invoiceNumber  发票号码
    * sealMark  是否有印章，True表示有印章，False表示不含印章，字段默认为False
    * title  标题
    * area  地区
    * receiptNumber  收据编码
    * amountInFigures  小写票据金额
    * amountInWords  大写票据金额
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。  > 说明：输入数据格式是OFD时，返回的字段坐标为空列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketId' => 'getTicketId',
            'checkPort' => 'getCheckPort',
            'trainNumber' => 'getTrainNumber',
            'departureStation' => 'getDepartureStation',
            'destinationStation' => 'getDestinationStation',
            'departureStationEn' => 'getDepartureStationEn',
            'destinationStationEn' => 'getDestinationStationEn',
            'departureTime' => 'getDepartureTime',
            'seatNumber' => 'getSeatNumber',
            'ticketPrice' => 'getTicketPrice',
            'saleMethod' => 'getSaleMethod',
            'seatCategory' => 'getSeatCategory',
            'ticketChanging' => 'getTicketChanging',
            'idNumber' => 'getIdNumber',
            'name' => 'getName',
            'logId' => 'getLogId',
            'saleLocation' => 'getSaleLocation',
            'invoiceStyle' => 'getInvoiceStyle',
            'issueDate' => 'getIssueDate',
            'discountMark' => 'getDiscountMark',
            'serialNumber' => 'getSerialNumber',
            'taxAmount' => 'getTaxAmount',
            'taxRate' => 'getTaxRate',
            'airConditioning' => 'getAirConditioning',
            'originalInvoiceNumber' => 'getOriginalInvoiceNumber',
            'unifiedSocialCreditCode' => 'getUnifiedSocialCreditCode',
            'buyerName' => 'getBuyerName',
            'totalAmountExcludingTax' => 'getTotalAmountExcludingTax',
            'invoiceNumber' => 'getInvoiceNumber',
            'sealMark' => 'getSealMark',
            'title' => 'getTitle',
            'area' => 'getArea',
            'receiptNumber' => 'getReceiptNumber',
            'amountInFigures' => 'getAmountInFigures',
            'amountInWords' => 'getAmountInWords',
            'confidence' => 'getConfidence',
            'textLocation' => 'getTextLocation'
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
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['checkPort'] = isset($data['checkPort']) ? $data['checkPort'] : null;
        $this->container['trainNumber'] = isset($data['trainNumber']) ? $data['trainNumber'] : null;
        $this->container['departureStation'] = isset($data['departureStation']) ? $data['departureStation'] : null;
        $this->container['destinationStation'] = isset($data['destinationStation']) ? $data['destinationStation'] : null;
        $this->container['departureStationEn'] = isset($data['departureStationEn']) ? $data['departureStationEn'] : null;
        $this->container['destinationStationEn'] = isset($data['destinationStationEn']) ? $data['destinationStationEn'] : null;
        $this->container['departureTime'] = isset($data['departureTime']) ? $data['departureTime'] : null;
        $this->container['seatNumber'] = isset($data['seatNumber']) ? $data['seatNumber'] : null;
        $this->container['ticketPrice'] = isset($data['ticketPrice']) ? $data['ticketPrice'] : null;
        $this->container['saleMethod'] = isset($data['saleMethod']) ? $data['saleMethod'] : null;
        $this->container['seatCategory'] = isset($data['seatCategory']) ? $data['seatCategory'] : null;
        $this->container['ticketChanging'] = isset($data['ticketChanging']) ? $data['ticketChanging'] : null;
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['saleLocation'] = isset($data['saleLocation']) ? $data['saleLocation'] : null;
        $this->container['invoiceStyle'] = isset($data['invoiceStyle']) ? $data['invoiceStyle'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['discountMark'] = isset($data['discountMark']) ? $data['discountMark'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['airConditioning'] = isset($data['airConditioning']) ? $data['airConditioning'] : null;
        $this->container['originalInvoiceNumber'] = isset($data['originalInvoiceNumber']) ? $data['originalInvoiceNumber'] : null;
        $this->container['unifiedSocialCreditCode'] = isset($data['unifiedSocialCreditCode']) ? $data['unifiedSocialCreditCode'] : null;
        $this->container['buyerName'] = isset($data['buyerName']) ? $data['buyerName'] : null;
        $this->container['totalAmountExcludingTax'] = isset($data['totalAmountExcludingTax']) ? $data['totalAmountExcludingTax'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['sealMark'] = isset($data['sealMark']) ? $data['sealMark'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['receiptNumber'] = isset($data['receiptNumber']) ? $data['receiptNumber'] : null;
        $this->container['amountInFigures'] = isset($data['amountInFigures']) ? $data['amountInFigures'] : null;
        $this->container['amountInWords'] = isset($data['amountInWords']) ? $data['amountInWords'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
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
    * Gets ticketId
    *  火车票左上角的车票ID。
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 火车票左上角的车票ID。
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets checkPort
    *  检票口信息。
    *
    * @return string|null
    */
    public function getCheckPort()
    {
        return $this->container['checkPort'];
    }

    /**
    * Sets checkPort
    *
    * @param string|null $checkPort 检票口信息。
    *
    * @return $this
    */
    public function setCheckPort($checkPort)
    {
        $this->container['checkPort'] = $checkPort;
        return $this;
    }

    /**
    * Gets trainNumber
    *  车次。
    *
    * @return string|null
    */
    public function getTrainNumber()
    {
        return $this->container['trainNumber'];
    }

    /**
    * Sets trainNumber
    *
    * @param string|null $trainNumber 车次。
    *
    * @return $this
    */
    public function setTrainNumber($trainNumber)
    {
        $this->container['trainNumber'] = $trainNumber;
        return $this;
    }

    /**
    * Gets departureStation
    *  始发站。
    *
    * @return string|null
    */
    public function getDepartureStation()
    {
        return $this->container['departureStation'];
    }

    /**
    * Sets departureStation
    *
    * @param string|null $departureStation 始发站。
    *
    * @return $this
    */
    public function setDepartureStation($departureStation)
    {
        $this->container['departureStation'] = $departureStation;
        return $this;
    }

    /**
    * Gets destinationStation
    *  终点站。
    *
    * @return string|null
    */
    public function getDestinationStation()
    {
        return $this->container['destinationStation'];
    }

    /**
    * Sets destinationStation
    *
    * @param string|null $destinationStation 终点站。
    *
    * @return $this
    */
    public function setDestinationStation($destinationStation)
    {
        $this->container['destinationStation'] = $destinationStation;
        return $this;
    }

    /**
    * Gets departureStationEn
    *  始发站拼音。
    *
    * @return string|null
    */
    public function getDepartureStationEn()
    {
        return $this->container['departureStationEn'];
    }

    /**
    * Sets departureStationEn
    *
    * @param string|null $departureStationEn 始发站拼音。
    *
    * @return $this
    */
    public function setDepartureStationEn($departureStationEn)
    {
        $this->container['departureStationEn'] = $departureStationEn;
        return $this;
    }

    /**
    * Gets destinationStationEn
    *  终点站拼音。
    *
    * @return string|null
    */
    public function getDestinationStationEn()
    {
        return $this->container['destinationStationEn'];
    }

    /**
    * Sets destinationStationEn
    *
    * @param string|null $destinationStationEn 终点站拼音。
    *
    * @return $this
    */
    public function setDestinationStationEn($destinationStationEn)
    {
        $this->container['destinationStationEn'] = $destinationStationEn;
        return $this;
    }

    /**
    * Gets departureTime
    *  开车时间。
    *
    * @return string|null
    */
    public function getDepartureTime()
    {
        return $this->container['departureTime'];
    }

    /**
    * Sets departureTime
    *
    * @param string|null $departureTime 开车时间。
    *
    * @return $this
    */
    public function setDepartureTime($departureTime)
    {
        $this->container['departureTime'] = $departureTime;
        return $this;
    }

    /**
    * Gets seatNumber
    *  座位号。
    *
    * @return string|null
    */
    public function getSeatNumber()
    {
        return $this->container['seatNumber'];
    }

    /**
    * Sets seatNumber
    *
    * @param string|null $seatNumber 座位号。
    *
    * @return $this
    */
    public function setSeatNumber($seatNumber)
    {
        $this->container['seatNumber'] = $seatNumber;
        return $this;
    }

    /**
    * Gets ticketPrice
    *  票价，当为退票凭证时，表示退票费。
    *
    * @return string|null
    */
    public function getTicketPrice()
    {
        return $this->container['ticketPrice'];
    }

    /**
    * Sets ticketPrice
    *
    * @param string|null $ticketPrice 票价，当为退票凭证时，表示退票费。
    *
    * @return $this
    */
    public function setTicketPrice($ticketPrice)
    {
        $this->container['ticketPrice'] = $ticketPrice;
        return $this;
    }

    /**
    * Gets saleMethod
    *  售票方式。
    *
    * @return string|null
    */
    public function getSaleMethod()
    {
        return $this->container['saleMethod'];
    }

    /**
    * Sets saleMethod
    *
    * @param string|null $saleMethod 售票方式。
    *
    * @return $this
    */
    public function setSaleMethod($saleMethod)
    {
        $this->container['saleMethod'] = $saleMethod;
        return $this;
    }

    /**
    * Gets seatCategory
    *  座位类别。
    *
    * @return string|null
    */
    public function getSeatCategory()
    {
        return $this->container['seatCategory'];
    }

    /**
    * Sets seatCategory
    *
    * @param string|null $seatCategory 座位类别。
    *
    * @return $this
    */
    public function setSeatCategory($seatCategory)
    {
        $this->container['seatCategory'] = $seatCategory;
        return $this;
    }

    /**
    * Gets ticketChanging
    *  标识信息，包含始发改签、退票、差额退票等。
    *
    * @return string|null
    */
    public function getTicketChanging()
    {
        return $this->container['ticketChanging'];
    }

    /**
    * Sets ticketChanging
    *
    * @param string|null $ticketChanging 标识信息，包含始发改签、退票、差额退票等。
    *
    * @return $this
    */
    public function setTicketChanging($ticketChanging)
    {
        $this->container['ticketChanging'] = $ticketChanging;
        return $this;
    }

    /**
    * Gets idNumber
    *  车票持有人的身份证号。
    *
    * @return string|null
    */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
    * Sets idNumber
    *
    * @param string|null $idNumber 车票持有人的身份证号。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets name
    *  车票持有人姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 车票持有人姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets logId
    *  车票最下方的序列号。
    *
    * @return string|null
    */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
    * Sets logId
    *
    * @param string|null $logId 车票最下方的序列号。
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets saleLocation
    *  车票售票地点。
    *
    * @return string|null
    */
    public function getSaleLocation()
    {
        return $this->container['saleLocation'];
    }

    /**
    * Sets saleLocation
    *
    * @param string|null $saleLocation 车票售票地点。
    *
    * @return $this
    */
    public function setSaleLocation($saleLocation)
    {
        $this->container['saleLocation'] = $saleLocation;
        return $this;
    }

    /**
    * Gets invoiceStyle
    *  类型。包含以下几种类型： - paper：纸质火车票 - electronic：铁路电子客票 - refund_old：退票费报销凭证 - refund_new：纸质火车票退票凭证  - refund_electronic：铁路电子客票退票凭证
    *
    * @return string|null
    */
    public function getInvoiceStyle()
    {
        return $this->container['invoiceStyle'];
    }

    /**
    * Sets invoiceStyle
    *
    * @param string|null $invoiceStyle 类型。包含以下几种类型： - paper：纸质火车票 - electronic：铁路电子客票 - refund_old：退票费报销凭证 - refund_new：纸质火车票退票凭证  - refund_electronic：铁路电子客票退票凭证
    *
    * @return $this
    */
    public function setInvoiceStyle($invoiceStyle)
    {
        $this->container['invoiceStyle'] = $invoiceStyle;
        return $this;
    }

    /**
    * Gets issueDate
    *  开票时间
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
    * @param string|null $issueDate 开票时间
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets discountMark
    *  打折标识
    *
    * @return string|null
    */
    public function getDiscountMark()
    {
        return $this->container['discountMark'];
    }

    /**
    * Sets discountMark
    *
    * @param string|null $discountMark 打折标识
    *
    * @return $this
    */
    public function setDiscountMark($discountMark)
    {
        $this->container['discountMark'] = $discountMark;
        return $this;
    }

    /**
    * Gets serialNumber
    *  电子客票号
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
    * @param string|null $serialNumber 电子客票号
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets taxAmount
    *  税金价格
    *
    * @return string|null
    */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
    * Sets taxAmount
    *
    * @param string|null $taxAmount 税金价格
    *
    * @return $this
    */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;
        return $this;
    }

    /**
    * Gets taxRate
    *  税率
    *
    * @return string|null
    */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
    * Sets taxRate
    *
    * @param string|null $taxRate 税率
    *
    * @return $this
    */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;
        return $this;
    }

    /**
    * Gets airConditioning
    *  是否是空调车厢
    *
    * @return string|null
    */
    public function getAirConditioning()
    {
        return $this->container['airConditioning'];
    }

    /**
    * Sets airConditioning
    *
    * @param string|null $airConditioning 是否是空调车厢
    *
    * @return $this
    */
    public function setAirConditioning($airConditioning)
    {
        $this->container['airConditioning'] = $airConditioning;
        return $this;
    }

    /**
    * Gets originalInvoiceNumber
    *  原发票号码
    *
    * @return string|null
    */
    public function getOriginalInvoiceNumber()
    {
        return $this->container['originalInvoiceNumber'];
    }

    /**
    * Sets originalInvoiceNumber
    *
    * @param string|null $originalInvoiceNumber 原发票号码
    *
    * @return $this
    */
    public function setOriginalInvoiceNumber($originalInvoiceNumber)
    {
        $this->container['originalInvoiceNumber'] = $originalInvoiceNumber;
        return $this;
    }

    /**
    * Gets unifiedSocialCreditCode
    *  统一社会信用号码
    *
    * @return string|null
    */
    public function getUnifiedSocialCreditCode()
    {
        return $this->container['unifiedSocialCreditCode'];
    }

    /**
    * Sets unifiedSocialCreditCode
    *
    * @param string|null $unifiedSocialCreditCode 统一社会信用号码
    *
    * @return $this
    */
    public function setUnifiedSocialCreditCode($unifiedSocialCreditCode)
    {
        $this->container['unifiedSocialCreditCode'] = $unifiedSocialCreditCode;
        return $this;
    }

    /**
    * Gets buyerName
    *  购买方名称
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
    * @param string|null $buyerName 购买方名称
    *
    * @return $this
    */
    public function setBuyerName($buyerName)
    {
        $this->container['buyerName'] = $buyerName;
        return $this;
    }

    /**
    * Gets totalAmountExcludingTax
    *  不含税价格
    *
    * @return string|null
    */
    public function getTotalAmountExcludingTax()
    {
        return $this->container['totalAmountExcludingTax'];
    }

    /**
    * Sets totalAmountExcludingTax
    *
    * @param string|null $totalAmountExcludingTax 不含税价格
    *
    * @return $this
    */
    public function setTotalAmountExcludingTax($totalAmountExcludingTax)
    {
        $this->container['totalAmountExcludingTax'] = $totalAmountExcludingTax;
        return $this;
    }

    /**
    * Gets invoiceNumber
    *  发票号码
    *
    * @return string|null
    */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
    * Sets invoiceNumber
    *
    * @param string|null $invoiceNumber 发票号码
    *
    * @return $this
    */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;
        return $this;
    }

    /**
    * Gets sealMark
    *  是否有印章，True表示有印章，False表示不含印章，字段默认为False
    *
    * @return bool|null
    */
    public function getSealMark()
    {
        return $this->container['sealMark'];
    }

    /**
    * Sets sealMark
    *
    * @param bool|null $sealMark 是否有印章，True表示有印章，False表示不含印章，字段默认为False
    *
    * @return $this
    */
    public function setSealMark($sealMark)
    {
        $this->container['sealMark'] = $sealMark;
        return $this;
    }

    /**
    * Gets title
    *  标题
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
    * @param string|null $title 标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets area
    *  地区
    *
    * @return string|null
    */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
    * Sets area
    *
    * @param string|null $area 地区
    *
    * @return $this
    */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
    * Gets receiptNumber
    *  收据编码
    *
    * @return string|null
    */
    public function getReceiptNumber()
    {
        return $this->container['receiptNumber'];
    }

    /**
    * Sets receiptNumber
    *
    * @param string|null $receiptNumber 收据编码
    *
    * @return $this
    */
    public function setReceiptNumber($receiptNumber)
    {
        $this->container['receiptNumber'] = $receiptNumber;
        return $this;
    }

    /**
    * Gets amountInFigures
    *  小写票据金额
    *
    * @return string|null
    */
    public function getAmountInFigures()
    {
        return $this->container['amountInFigures'];
    }

    /**
    * Sets amountInFigures
    *
    * @param string|null $amountInFigures 小写票据金额
    *
    * @return $this
    */
    public function setAmountInFigures($amountInFigures)
    {
        $this->container['amountInFigures'] = $amountInFigures;
        return $this;
    }

    /**
    * Gets amountInWords
    *  大写票据金额
    *
    * @return string|null
    */
    public function getAmountInWords()
    {
        return $this->container['amountInWords'];
    }

    /**
    * Sets amountInWords
    *
    * @param string|null $amountInWords 大写票据金额
    *
    * @return $this
    */
    public function setAmountInWords($amountInWords)
    {
        $this->container['amountInWords'] = $amountInWords;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
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
    * @param object|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
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
    *  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。  > 说明：输入数据格式是OFD时，返回的字段坐标为空列表。
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
    * @param object|null $textLocation 对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。  > 说明：输入数据格式是OFD时，返回的字段坐标为空列表。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
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

