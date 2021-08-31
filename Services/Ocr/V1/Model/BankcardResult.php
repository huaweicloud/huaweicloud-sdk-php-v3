<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BankcardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BankcardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bankName  发卡行。
    * cardNumber  银行卡号。
    * issueDate  有效期开始日期。
    * expiryDate  有效期截止日期。
    * type  银行卡类别，如：储蓄卡，信用卡。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bankName' => 'string',
            'cardNumber' => 'string',
            'issueDate' => 'string',
            'expiryDate' => 'string',
            'type' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bankName  发卡行。
    * cardNumber  银行卡号。
    * issueDate  有效期开始日期。
    * expiryDate  有效期截止日期。
    * type  银行卡类别，如：储蓄卡，信用卡。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bankName' => null,
        'cardNumber' => null,
        'issueDate' => null,
        'expiryDate' => null,
        'type' => null,
        'confidence' => null
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
    * bankName  发卡行。
    * cardNumber  银行卡号。
    * issueDate  有效期开始日期。
    * expiryDate  有效期截止日期。
    * type  银行卡类别，如：储蓄卡，信用卡。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bankName' => 'bank_name',
            'cardNumber' => 'card_number',
            'issueDate' => 'issue_date',
            'expiryDate' => 'expiry_date',
            'type' => 'type',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bankName  发卡行。
    * cardNumber  银行卡号。
    * issueDate  有效期开始日期。
    * expiryDate  有效期截止日期。
    * type  银行卡类别，如：储蓄卡，信用卡。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'bankName' => 'setBankName',
            'cardNumber' => 'setCardNumber',
            'issueDate' => 'setIssueDate',
            'expiryDate' => 'setExpiryDate',
            'type' => 'setType',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bankName  发卡行。
    * cardNumber  银行卡号。
    * issueDate  有效期开始日期。
    * expiryDate  有效期截止日期。
    * type  银行卡类别，如：储蓄卡，信用卡。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'bankName' => 'getBankName',
            'cardNumber' => 'getCardNumber',
            'issueDate' => 'getIssueDate',
            'expiryDate' => 'getExpiryDate',
            'type' => 'getType',
            'confidence' => 'getConfidence'
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
        $this->container['bankName'] = isset($data['bankName']) ? $data['bankName'] : null;
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
    * Gets bankName
    *  发卡行。
    *
    * @return string|null
    */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
    * Sets bankName
    *
    * @param string|null $bankName 发卡行。
    *
    * @return $this
    */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;
        return $this;
    }

    /**
    * Gets cardNumber
    *  银行卡号。
    *
    * @return string|null
    */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
    * Sets cardNumber
    *
    * @param string|null $cardNumber 银行卡号。
    *
    * @return $this
    */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;
        return $this;
    }

    /**
    * Gets issueDate
    *  有效期开始日期。
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
    * @param string|null $issueDate 有效期开始日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets expiryDate
    *  有效期截止日期。
    *
    * @return string|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param string|null $expiryDate 有效期截止日期。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets type
    *  银行卡类别，如：储蓄卡，信用卡。
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
    * @param string|null $type 银行卡类别，如：储蓄卡，信用卡。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

