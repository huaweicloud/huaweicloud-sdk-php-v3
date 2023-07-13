<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InvoiceRequestInfoIntl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InvoiceRequestInfoIntl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  请求ID。
    * cancelReason  驳回原因。
    * titleType  开票类型。 0：个人1：企业
    * channelType  渠道类型。 0：华为云
    * invoiceType  发票种类。 0：增值税专用发票1：增值税普通发票
    * invoiceTitle  发票抬头。
    * invoiceAmount  已开票金额（美元） 。
    * invoiceMethod  开票方式。 0：账期1：到账2：订单
    * invoiceClass  发票类别。 0：税票1：商票
    * invoiceState  开票状态。 0：草稿1：待审核4：等待导出发票文件5：等待发票文件回填6：等待邮寄确认7：等待回执确认8：完成9：已退票11：等待驳回审核13：退票待审核14：待退票状态回填15：退票失败
    * applyOpera  发票申请人员。
    * addressInfo  addressInfo
    * applyTime  申请时间（UTC时间）。
    * invoiceMode  发票类型。 0：纸质票
    * email  电子发票寄送地。
    * requestMode  申请类型。 0：开票申请1：退票申请2：正向开票已退票
    * srcRequestId  退票时的原申请ID。
    * salesId  签约主体ID。
    * invoiceNo  发票号码。
    * tradeType  交易类型。 3：结算信用卡扣减4：结算未结清开票5：先开票后到款6：BP月结开票7：充值开票8：包年/包月在线支付开票10：普通提现开票
    * billCycle  发票账期。
    * taxList  税务信息列表，参见表4。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'cancelReason' => 'string',
            'titleType' => 'int',
            'channelType' => 'int',
            'invoiceType' => 'int',
            'invoiceTitle' => 'string',
            'invoiceAmount' => 'double',
            'invoiceMethod' => 'int',
            'invoiceClass' => 'int',
            'invoiceState' => 'int',
            'applyOpera' => 'string',
            'addressInfo' => '\HuaweiCloud\SDK\Bssintl\V2\Model\PostAddressInfoIntl',
            'applyTime' => 'string',
            'invoiceMode' => 'string',
            'email' => 'string',
            'requestMode' => 'string',
            'srcRequestId' => 'string',
            'salesId' => 'string',
            'invoiceNo' => 'string',
            'tradeType' => 'int',
            'billCycle' => 'string',
            'taxList' => '\HuaweiCloud\SDK\Bssintl\V2\Model\TaxInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  请求ID。
    * cancelReason  驳回原因。
    * titleType  开票类型。 0：个人1：企业
    * channelType  渠道类型。 0：华为云
    * invoiceType  发票种类。 0：增值税专用发票1：增值税普通发票
    * invoiceTitle  发票抬头。
    * invoiceAmount  已开票金额（美元） 。
    * invoiceMethod  开票方式。 0：账期1：到账2：订单
    * invoiceClass  发票类别。 0：税票1：商票
    * invoiceState  开票状态。 0：草稿1：待审核4：等待导出发票文件5：等待发票文件回填6：等待邮寄确认7：等待回执确认8：完成9：已退票11：等待驳回审核13：退票待审核14：待退票状态回填15：退票失败
    * applyOpera  发票申请人员。
    * addressInfo  addressInfo
    * applyTime  申请时间（UTC时间）。
    * invoiceMode  发票类型。 0：纸质票
    * email  电子发票寄送地。
    * requestMode  申请类型。 0：开票申请1：退票申请2：正向开票已退票
    * srcRequestId  退票时的原申请ID。
    * salesId  签约主体ID。
    * invoiceNo  发票号码。
    * tradeType  交易类型。 3：结算信用卡扣减4：结算未结清开票5：先开票后到款6：BP月结开票7：充值开票8：包年/包月在线支付开票10：普通提现开票
    * billCycle  发票账期。
    * taxList  税务信息列表，参见表4。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'cancelReason' => null,
        'titleType' => 'int32',
        'channelType' => 'int32',
        'invoiceType' => 'int32',
        'invoiceTitle' => null,
        'invoiceAmount' => 'double',
        'invoiceMethod' => 'int32',
        'invoiceClass' => 'int32',
        'invoiceState' => 'int32',
        'applyOpera' => null,
        'addressInfo' => null,
        'applyTime' => null,
        'invoiceMode' => null,
        'email' => null,
        'requestMode' => null,
        'srcRequestId' => null,
        'salesId' => null,
        'invoiceNo' => null,
        'tradeType' => 'int32',
        'billCycle' => null,
        'taxList' => null
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
    * requestId  请求ID。
    * cancelReason  驳回原因。
    * titleType  开票类型。 0：个人1：企业
    * channelType  渠道类型。 0：华为云
    * invoiceType  发票种类。 0：增值税专用发票1：增值税普通发票
    * invoiceTitle  发票抬头。
    * invoiceAmount  已开票金额（美元） 。
    * invoiceMethod  开票方式。 0：账期1：到账2：订单
    * invoiceClass  发票类别。 0：税票1：商票
    * invoiceState  开票状态。 0：草稿1：待审核4：等待导出发票文件5：等待发票文件回填6：等待邮寄确认7：等待回执确认8：完成9：已退票11：等待驳回审核13：退票待审核14：待退票状态回填15：退票失败
    * applyOpera  发票申请人员。
    * addressInfo  addressInfo
    * applyTime  申请时间（UTC时间）。
    * invoiceMode  发票类型。 0：纸质票
    * email  电子发票寄送地。
    * requestMode  申请类型。 0：开票申请1：退票申请2：正向开票已退票
    * srcRequestId  退票时的原申请ID。
    * salesId  签约主体ID。
    * invoiceNo  发票号码。
    * tradeType  交易类型。 3：结算信用卡扣减4：结算未结清开票5：先开票后到款6：BP月结开票7：充值开票8：包年/包月在线支付开票10：普通提现开票
    * billCycle  发票账期。
    * taxList  税务信息列表，参见表4。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'requestId',
            'cancelReason' => 'cancelReason',
            'titleType' => 'titleType',
            'channelType' => 'channelType',
            'invoiceType' => 'invoiceType',
            'invoiceTitle' => 'invoiceTitle',
            'invoiceAmount' => 'invoiceAmount',
            'invoiceMethod' => 'invoiceMethod',
            'invoiceClass' => 'invoiceClass',
            'invoiceState' => 'invoiceState',
            'applyOpera' => 'applyOpera',
            'addressInfo' => 'addressInfo',
            'applyTime' => 'applyTime',
            'invoiceMode' => 'invoiceMode',
            'email' => 'email',
            'requestMode' => 'requestMode',
            'srcRequestId' => 'srcRequestId',
            'salesId' => 'salesId',
            'invoiceNo' => 'invoiceNo',
            'tradeType' => 'tradeType',
            'billCycle' => 'billCycle',
            'taxList' => 'taxList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  请求ID。
    * cancelReason  驳回原因。
    * titleType  开票类型。 0：个人1：企业
    * channelType  渠道类型。 0：华为云
    * invoiceType  发票种类。 0：增值税专用发票1：增值税普通发票
    * invoiceTitle  发票抬头。
    * invoiceAmount  已开票金额（美元） 。
    * invoiceMethod  开票方式。 0：账期1：到账2：订单
    * invoiceClass  发票类别。 0：税票1：商票
    * invoiceState  开票状态。 0：草稿1：待审核4：等待导出发票文件5：等待发票文件回填6：等待邮寄确认7：等待回执确认8：完成9：已退票11：等待驳回审核13：退票待审核14：待退票状态回填15：退票失败
    * applyOpera  发票申请人员。
    * addressInfo  addressInfo
    * applyTime  申请时间（UTC时间）。
    * invoiceMode  发票类型。 0：纸质票
    * email  电子发票寄送地。
    * requestMode  申请类型。 0：开票申请1：退票申请2：正向开票已退票
    * srcRequestId  退票时的原申请ID。
    * salesId  签约主体ID。
    * invoiceNo  发票号码。
    * tradeType  交易类型。 3：结算信用卡扣减4：结算未结清开票5：先开票后到款6：BP月结开票7：充值开票8：包年/包月在线支付开票10：普通提现开票
    * billCycle  发票账期。
    * taxList  税务信息列表，参见表4。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'cancelReason' => 'setCancelReason',
            'titleType' => 'setTitleType',
            'channelType' => 'setChannelType',
            'invoiceType' => 'setInvoiceType',
            'invoiceTitle' => 'setInvoiceTitle',
            'invoiceAmount' => 'setInvoiceAmount',
            'invoiceMethod' => 'setInvoiceMethod',
            'invoiceClass' => 'setInvoiceClass',
            'invoiceState' => 'setInvoiceState',
            'applyOpera' => 'setApplyOpera',
            'addressInfo' => 'setAddressInfo',
            'applyTime' => 'setApplyTime',
            'invoiceMode' => 'setInvoiceMode',
            'email' => 'setEmail',
            'requestMode' => 'setRequestMode',
            'srcRequestId' => 'setSrcRequestId',
            'salesId' => 'setSalesId',
            'invoiceNo' => 'setInvoiceNo',
            'tradeType' => 'setTradeType',
            'billCycle' => 'setBillCycle',
            'taxList' => 'setTaxList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  请求ID。
    * cancelReason  驳回原因。
    * titleType  开票类型。 0：个人1：企业
    * channelType  渠道类型。 0：华为云
    * invoiceType  发票种类。 0：增值税专用发票1：增值税普通发票
    * invoiceTitle  发票抬头。
    * invoiceAmount  已开票金额（美元） 。
    * invoiceMethod  开票方式。 0：账期1：到账2：订单
    * invoiceClass  发票类别。 0：税票1：商票
    * invoiceState  开票状态。 0：草稿1：待审核4：等待导出发票文件5：等待发票文件回填6：等待邮寄确认7：等待回执确认8：完成9：已退票11：等待驳回审核13：退票待审核14：待退票状态回填15：退票失败
    * applyOpera  发票申请人员。
    * addressInfo  addressInfo
    * applyTime  申请时间（UTC时间）。
    * invoiceMode  发票类型。 0：纸质票
    * email  电子发票寄送地。
    * requestMode  申请类型。 0：开票申请1：退票申请2：正向开票已退票
    * srcRequestId  退票时的原申请ID。
    * salesId  签约主体ID。
    * invoiceNo  发票号码。
    * tradeType  交易类型。 3：结算信用卡扣减4：结算未结清开票5：先开票后到款6：BP月结开票7：充值开票8：包年/包月在线支付开票10：普通提现开票
    * billCycle  发票账期。
    * taxList  税务信息列表，参见表4。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'cancelReason' => 'getCancelReason',
            'titleType' => 'getTitleType',
            'channelType' => 'getChannelType',
            'invoiceType' => 'getInvoiceType',
            'invoiceTitle' => 'getInvoiceTitle',
            'invoiceAmount' => 'getInvoiceAmount',
            'invoiceMethod' => 'getInvoiceMethod',
            'invoiceClass' => 'getInvoiceClass',
            'invoiceState' => 'getInvoiceState',
            'applyOpera' => 'getApplyOpera',
            'addressInfo' => 'getAddressInfo',
            'applyTime' => 'getApplyTime',
            'invoiceMode' => 'getInvoiceMode',
            'email' => 'getEmail',
            'requestMode' => 'getRequestMode',
            'srcRequestId' => 'getSrcRequestId',
            'salesId' => 'getSalesId',
            'invoiceNo' => 'getInvoiceNo',
            'tradeType' => 'getTradeType',
            'billCycle' => 'getBillCycle',
            'taxList' => 'getTaxList'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['cancelReason'] = isset($data['cancelReason']) ? $data['cancelReason'] : null;
        $this->container['titleType'] = isset($data['titleType']) ? $data['titleType'] : null;
        $this->container['channelType'] = isset($data['channelType']) ? $data['channelType'] : null;
        $this->container['invoiceType'] = isset($data['invoiceType']) ? $data['invoiceType'] : null;
        $this->container['invoiceTitle'] = isset($data['invoiceTitle']) ? $data['invoiceTitle'] : null;
        $this->container['invoiceAmount'] = isset($data['invoiceAmount']) ? $data['invoiceAmount'] : null;
        $this->container['invoiceMethod'] = isset($data['invoiceMethod']) ? $data['invoiceMethod'] : null;
        $this->container['invoiceClass'] = isset($data['invoiceClass']) ? $data['invoiceClass'] : null;
        $this->container['invoiceState'] = isset($data['invoiceState']) ? $data['invoiceState'] : null;
        $this->container['applyOpera'] = isset($data['applyOpera']) ? $data['applyOpera'] : null;
        $this->container['addressInfo'] = isset($data['addressInfo']) ? $data['addressInfo'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['invoiceMode'] = isset($data['invoiceMode']) ? $data['invoiceMode'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['requestMode'] = isset($data['requestMode']) ? $data['requestMode'] : null;
        $this->container['srcRequestId'] = isset($data['srcRequestId']) ? $data['srcRequestId'] : null;
        $this->container['salesId'] = isset($data['salesId']) ? $data['salesId'] : null;
        $this->container['invoiceNo'] = isset($data['invoiceNo']) ? $data['invoiceNo'] : null;
        $this->container['tradeType'] = isset($data['tradeType']) ? $data['tradeType'] : null;
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['taxList'] = isset($data['taxList']) ? $data['taxList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 64)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 0)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cancelReason']) && (mb_strlen($this->container['cancelReason']) > 256)) {
                $invalidProperties[] = "invalid value for 'cancelReason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cancelReason']) && (mb_strlen($this->container['cancelReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'cancelReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['invoiceTitle']) && (mb_strlen($this->container['invoiceTitle']) > 1024)) {
                $invalidProperties[] = "invalid value for 'invoiceTitle', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['invoiceTitle']) && (mb_strlen($this->container['invoiceTitle']) < 0)) {
                $invalidProperties[] = "invalid value for 'invoiceTitle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applyOpera']) && (mb_strlen($this->container['applyOpera']) > 32)) {
                $invalidProperties[] = "invalid value for 'applyOpera', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['applyOpera']) && (mb_strlen($this->container['applyOpera']) < 0)) {
                $invalidProperties[] = "invalid value for 'applyOpera', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applyTime']) && (mb_strlen($this->container['applyTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'applyTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['applyTime']) && (mb_strlen($this->container['applyTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'applyTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 400)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcRequestId']) && (mb_strlen($this->container['srcRequestId']) > 64)) {
                $invalidProperties[] = "invalid value for 'srcRequestId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['srcRequestId']) && (mb_strlen($this->container['srcRequestId']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcRequestId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['salesId']) && (mb_strlen($this->container['salesId']) > 64)) {
                $invalidProperties[] = "invalid value for 'salesId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['salesId']) && (mb_strlen($this->container['salesId']) < 0)) {
                $invalidProperties[] = "invalid value for 'salesId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['invoiceNo']) && (mb_strlen($this->container['invoiceNo']) > 32)) {
                $invalidProperties[] = "invalid value for 'invoiceNo', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['invoiceNo']) && (mb_strlen($this->container['invoiceNo']) < 0)) {
                $invalidProperties[] = "invalid value for 'invoiceNo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['billCycle']) && (mb_strlen($this->container['billCycle']) > 64)) {
                $invalidProperties[] = "invalid value for 'billCycle', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['billCycle']) && (mb_strlen($this->container['billCycle']) < 0)) {
                $invalidProperties[] = "invalid value for 'billCycle', the character length must be bigger than or equal to 0.";
            }
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
    * Gets requestId
    *  请求ID。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets cancelReason
    *  驳回原因。
    *
    * @return string|null
    */
    public function getCancelReason()
    {
        return $this->container['cancelReason'];
    }

    /**
    * Sets cancelReason
    *
    * @param string|null $cancelReason 驳回原因。
    *
    * @return $this
    */
    public function setCancelReason($cancelReason)
    {
        $this->container['cancelReason'] = $cancelReason;
        return $this;
    }

    /**
    * Gets titleType
    *  开票类型。 0：个人1：企业
    *
    * @return int|null
    */
    public function getTitleType()
    {
        return $this->container['titleType'];
    }

    /**
    * Sets titleType
    *
    * @param int|null $titleType 开票类型。 0：个人1：企业
    *
    * @return $this
    */
    public function setTitleType($titleType)
    {
        $this->container['titleType'] = $titleType;
        return $this;
    }

    /**
    * Gets channelType
    *  渠道类型。 0：华为云
    *
    * @return int|null
    */
    public function getChannelType()
    {
        return $this->container['channelType'];
    }

    /**
    * Sets channelType
    *
    * @param int|null $channelType 渠道类型。 0：华为云
    *
    * @return $this
    */
    public function setChannelType($channelType)
    {
        $this->container['channelType'] = $channelType;
        return $this;
    }

    /**
    * Gets invoiceType
    *  发票种类。 0：增值税专用发票1：增值税普通发票
    *
    * @return int|null
    */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
    * Sets invoiceType
    *
    * @param int|null $invoiceType 发票种类。 0：增值税专用发票1：增值税普通发票
    *
    * @return $this
    */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;
        return $this;
    }

    /**
    * Gets invoiceTitle
    *  发票抬头。
    *
    * @return string|null
    */
    public function getInvoiceTitle()
    {
        return $this->container['invoiceTitle'];
    }

    /**
    * Sets invoiceTitle
    *
    * @param string|null $invoiceTitle 发票抬头。
    *
    * @return $this
    */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->container['invoiceTitle'] = $invoiceTitle;
        return $this;
    }

    /**
    * Gets invoiceAmount
    *  已开票金额（美元） 。
    *
    * @return double|null
    */
    public function getInvoiceAmount()
    {
        return $this->container['invoiceAmount'];
    }

    /**
    * Sets invoiceAmount
    *
    * @param double|null $invoiceAmount 已开票金额（美元） 。
    *
    * @return $this
    */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->container['invoiceAmount'] = $invoiceAmount;
        return $this;
    }

    /**
    * Gets invoiceMethod
    *  开票方式。 0：账期1：到账2：订单
    *
    * @return int|null
    */
    public function getInvoiceMethod()
    {
        return $this->container['invoiceMethod'];
    }

    /**
    * Sets invoiceMethod
    *
    * @param int|null $invoiceMethod 开票方式。 0：账期1：到账2：订单
    *
    * @return $this
    */
    public function setInvoiceMethod($invoiceMethod)
    {
        $this->container['invoiceMethod'] = $invoiceMethod;
        return $this;
    }

    /**
    * Gets invoiceClass
    *  发票类别。 0：税票1：商票
    *
    * @return int|null
    */
    public function getInvoiceClass()
    {
        return $this->container['invoiceClass'];
    }

    /**
    * Sets invoiceClass
    *
    * @param int|null $invoiceClass 发票类别。 0：税票1：商票
    *
    * @return $this
    */
    public function setInvoiceClass($invoiceClass)
    {
        $this->container['invoiceClass'] = $invoiceClass;
        return $this;
    }

    /**
    * Gets invoiceState
    *  开票状态。 0：草稿1：待审核4：等待导出发票文件5：等待发票文件回填6：等待邮寄确认7：等待回执确认8：完成9：已退票11：等待驳回审核13：退票待审核14：待退票状态回填15：退票失败
    *
    * @return int|null
    */
    public function getInvoiceState()
    {
        return $this->container['invoiceState'];
    }

    /**
    * Sets invoiceState
    *
    * @param int|null $invoiceState 开票状态。 0：草稿1：待审核4：等待导出发票文件5：等待发票文件回填6：等待邮寄确认7：等待回执确认8：完成9：已退票11：等待驳回审核13：退票待审核14：待退票状态回填15：退票失败
    *
    * @return $this
    */
    public function setInvoiceState($invoiceState)
    {
        $this->container['invoiceState'] = $invoiceState;
        return $this;
    }

    /**
    * Gets applyOpera
    *  发票申请人员。
    *
    * @return string|null
    */
    public function getApplyOpera()
    {
        return $this->container['applyOpera'];
    }

    /**
    * Sets applyOpera
    *
    * @param string|null $applyOpera 发票申请人员。
    *
    * @return $this
    */
    public function setApplyOpera($applyOpera)
    {
        $this->container['applyOpera'] = $applyOpera;
        return $this;
    }

    /**
    * Gets addressInfo
    *  addressInfo
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\PostAddressInfoIntl|null
    */
    public function getAddressInfo()
    {
        return $this->container['addressInfo'];
    }

    /**
    * Sets addressInfo
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\PostAddressInfoIntl|null $addressInfo addressInfo
    *
    * @return $this
    */
    public function setAddressInfo($addressInfo)
    {
        $this->container['addressInfo'] = $addressInfo;
        return $this;
    }

    /**
    * Gets applyTime
    *  申请时间（UTC时间）。
    *
    * @return string|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param string|null $applyTime 申请时间（UTC时间）。
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets invoiceMode
    *  发票类型。 0：纸质票
    *
    * @return string|null
    */
    public function getInvoiceMode()
    {
        return $this->container['invoiceMode'];
    }

    /**
    * Sets invoiceMode
    *
    * @param string|null $invoiceMode 发票类型。 0：纸质票
    *
    * @return $this
    */
    public function setInvoiceMode($invoiceMode)
    {
        $this->container['invoiceMode'] = $invoiceMode;
        return $this;
    }

    /**
    * Gets email
    *  电子发票寄送地。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 电子发票寄送地。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets requestMode
    *  申请类型。 0：开票申请1：退票申请2：正向开票已退票
    *
    * @return string|null
    */
    public function getRequestMode()
    {
        return $this->container['requestMode'];
    }

    /**
    * Sets requestMode
    *
    * @param string|null $requestMode 申请类型。 0：开票申请1：退票申请2：正向开票已退票
    *
    * @return $this
    */
    public function setRequestMode($requestMode)
    {
        $this->container['requestMode'] = $requestMode;
        return $this;
    }

    /**
    * Gets srcRequestId
    *  退票时的原申请ID。
    *
    * @return string|null
    */
    public function getSrcRequestId()
    {
        return $this->container['srcRequestId'];
    }

    /**
    * Sets srcRequestId
    *
    * @param string|null $srcRequestId 退票时的原申请ID。
    *
    * @return $this
    */
    public function setSrcRequestId($srcRequestId)
    {
        $this->container['srcRequestId'] = $srcRequestId;
        return $this;
    }

    /**
    * Gets salesId
    *  签约主体ID。
    *
    * @return string|null
    */
    public function getSalesId()
    {
        return $this->container['salesId'];
    }

    /**
    * Sets salesId
    *
    * @param string|null $salesId 签约主体ID。
    *
    * @return $this
    */
    public function setSalesId($salesId)
    {
        $this->container['salesId'] = $salesId;
        return $this;
    }

    /**
    * Gets invoiceNo
    *  发票号码。
    *
    * @return string|null
    */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
    * Sets invoiceNo
    *
    * @param string|null $invoiceNo 发票号码。
    *
    * @return $this
    */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;
        return $this;
    }

    /**
    * Gets tradeType
    *  交易类型。 3：结算信用卡扣减4：结算未结清开票5：先开票后到款6：BP月结开票7：充值开票8：包年/包月在线支付开票10：普通提现开票
    *
    * @return int|null
    */
    public function getTradeType()
    {
        return $this->container['tradeType'];
    }

    /**
    * Sets tradeType
    *
    * @param int|null $tradeType 交易类型。 3：结算信用卡扣减4：结算未结清开票5：先开票后到款6：BP月结开票7：充值开票8：包年/包月在线支付开票10：普通提现开票
    *
    * @return $this
    */
    public function setTradeType($tradeType)
    {
        $this->container['tradeType'] = $tradeType;
        return $this;
    }

    /**
    * Gets billCycle
    *  发票账期。
    *
    * @return string|null
    */
    public function getBillCycle()
    {
        return $this->container['billCycle'];
    }

    /**
    * Sets billCycle
    *
    * @param string|null $billCycle 发票账期。
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets taxList
    *  税务信息列表，参见表4。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\TaxInfo[]|null
    */
    public function getTaxList()
    {
        return $this->container['taxList'];
    }

    /**
    * Sets taxList
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\TaxInfo[]|null $taxList 税务信息列表，参见表4。
    *
    * @return $this
    */
    public function setTaxList($taxList)
    {
        $this->container['taxList'] = $taxList;
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

