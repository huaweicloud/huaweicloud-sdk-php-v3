<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueBaselineResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueBaselineResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  变更的工作项ID。
    * modifiedBy  工作项变更人ID。
    * baseline  工作项基线结果。
    * operationId  工作项基线的操作记录ID。
    * modifiedDate  工作项完成基线的unix时间戳，单位：毫秒。
    * number  基线的工作项编号。 基线失败时返回。
    * title  基线的工作项标题。 基线失败时返回。
    * failMessage  工作项基线失败原因。 基线失败时返回。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'modifiedBy' => 'string',
            'baseline' => 'string',
            'operationId' => 'string',
            'modifiedDate' => 'string',
            'number' => 'string',
            'title' => 'string',
            'failMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  变更的工作项ID。
    * modifiedBy  工作项变更人ID。
    * baseline  工作项基线结果。
    * operationId  工作项基线的操作记录ID。
    * modifiedDate  工作项完成基线的unix时间戳，单位：毫秒。
    * number  基线的工作项编号。 基线失败时返回。
    * title  基线的工作项标题。 基线失败时返回。
    * failMessage  工作项基线失败原因。 基线失败时返回。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'modifiedBy' => null,
        'baseline' => null,
        'operationId' => null,
        'modifiedDate' => null,
        'number' => null,
        'title' => null,
        'failMessage' => null
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
    * id  变更的工作项ID。
    * modifiedBy  工作项变更人ID。
    * baseline  工作项基线结果。
    * operationId  工作项基线的操作记录ID。
    * modifiedDate  工作项完成基线的unix时间戳，单位：毫秒。
    * number  基线的工作项编号。 基线失败时返回。
    * title  基线的工作项标题。 基线失败时返回。
    * failMessage  工作项基线失败原因。 基线失败时返回。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'modifiedBy' => 'modified_by',
            'baseline' => 'baseline',
            'operationId' => 'operation_id',
            'modifiedDate' => 'modified_date',
            'number' => 'number',
            'title' => 'title',
            'failMessage' => 'fail_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  变更的工作项ID。
    * modifiedBy  工作项变更人ID。
    * baseline  工作项基线结果。
    * operationId  工作项基线的操作记录ID。
    * modifiedDate  工作项完成基线的unix时间戳，单位：毫秒。
    * number  基线的工作项编号。 基线失败时返回。
    * title  基线的工作项标题。 基线失败时返回。
    * failMessage  工作项基线失败原因。 基线失败时返回。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'modifiedBy' => 'setModifiedBy',
            'baseline' => 'setBaseline',
            'operationId' => 'setOperationId',
            'modifiedDate' => 'setModifiedDate',
            'number' => 'setNumber',
            'title' => 'setTitle',
            'failMessage' => 'setFailMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  变更的工作项ID。
    * modifiedBy  工作项变更人ID。
    * baseline  工作项基线结果。
    * operationId  工作项基线的操作记录ID。
    * modifiedDate  工作项完成基线的unix时间戳，单位：毫秒。
    * number  基线的工作项编号。 基线失败时返回。
    * title  基线的工作项标题。 基线失败时返回。
    * failMessage  工作项基线失败原因。 基线失败时返回。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'modifiedBy' => 'getModifiedBy',
            'baseline' => 'getBaseline',
            'operationId' => 'getOperationId',
            'modifiedDate' => 'getModifiedDate',
            'number' => 'getNumber',
            'title' => 'getTitle',
            'failMessage' => 'getFailMessage'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['failMessage'] = isset($data['failMessage']) ? $data['failMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be bigger than or equal to 32.";
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
    * Gets id
    *  变更的工作项ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 变更的工作项ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  工作项变更人ID。
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 工作项变更人ID。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets baseline
    *  工作项基线结果。
    *
    * @return string|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param string|null $baseline 工作项基线结果。
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets operationId
    *  工作项基线的操作记录ID。
    *
    * @return string|null
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string|null $operationId 工作项基线的操作记录ID。
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  工作项完成基线的unix时间戳，单位：毫秒。
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 工作项完成基线的unix时间戳，单位：毫秒。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets number
    *  基线的工作项编号。 基线失败时返回。
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
    * @param string|null $number 基线的工作项编号。 基线失败时返回。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets title
    *  基线的工作项标题。 基线失败时返回。
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
    * @param string|null $title 基线的工作项标题。 基线失败时返回。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets failMessage
    *  工作项基线失败原因。 基线失败时返回。
    *
    * @return string|null
    */
    public function getFailMessage()
    {
        return $this->container['failMessage'];
    }

    /**
    * Sets failMessage
    *
    * @param string|null $failMessage 工作项基线失败原因。 基线失败时返回。
    *
    * @return $this
    */
    public function setFailMessage($failMessage)
    {
        $this->container['failMessage'] = $failMessage;
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

