<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateRespDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateRespDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issueId  关联的工作项ID，多个ID使用逗号分割。
    * failMsg  失败原因。
    * operationFlag  操作类型标记位。
    * modifiedDate  修改日期。
    * modifiedBy  修改人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issueId' => 'string',
            'failMsg' => 'string',
            'operationFlag' => 'int',
            'modifiedDate' => 'int',
            'modifiedBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issueId  关联的工作项ID，多个ID使用逗号分割。
    * failMsg  失败原因。
    * operationFlag  操作类型标记位。
    * modifiedDate  修改日期。
    * modifiedBy  修改人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issueId' => null,
        'failMsg' => null,
        'operationFlag' => 'int32',
        'modifiedDate' => 'int64',
        'modifiedBy' => null
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
    * issueId  关联的工作项ID，多个ID使用逗号分割。
    * failMsg  失败原因。
    * operationFlag  操作类型标记位。
    * modifiedDate  修改日期。
    * modifiedBy  修改人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issueId' => 'issue_id',
            'failMsg' => 'fail_msg',
            'operationFlag' => 'operation_flag',
            'modifiedDate' => 'modified_date',
            'modifiedBy' => 'modified_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issueId  关联的工作项ID，多个ID使用逗号分割。
    * failMsg  失败原因。
    * operationFlag  操作类型标记位。
    * modifiedDate  修改日期。
    * modifiedBy  修改人。
    *
    * @var string[]
    */
    protected static $setters = [
            'issueId' => 'setIssueId',
            'failMsg' => 'setFailMsg',
            'operationFlag' => 'setOperationFlag',
            'modifiedDate' => 'setModifiedDate',
            'modifiedBy' => 'setModifiedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issueId  关联的工作项ID，多个ID使用逗号分割。
    * failMsg  失败原因。
    * operationFlag  操作类型标记位。
    * modifiedDate  修改日期。
    * modifiedBy  修改人。
    *
    * @var string[]
    */
    protected static $getters = [
            'issueId' => 'getIssueId',
            'failMsg' => 'getFailMsg',
            'operationFlag' => 'getOperationFlag',
            'modifiedDate' => 'getModifiedDate',
            'modifiedBy' => 'getModifiedBy'
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
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['failMsg'] = isset($data['failMsg']) ? $data['failMsg'] : null;
        $this->container['operationFlag'] = isset($data['operationFlag']) ? $data['operationFlag'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
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
    * Gets issueId
    *  关联的工作项ID，多个ID使用逗号分割。
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 关联的工作项ID，多个ID使用逗号分割。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets failMsg
    *  失败原因。
    *
    * @return string|null
    */
    public function getFailMsg()
    {
        return $this->container['failMsg'];
    }

    /**
    * Sets failMsg
    *
    * @param string|null $failMsg 失败原因。
    *
    * @return $this
    */
    public function setFailMsg($failMsg)
    {
        $this->container['failMsg'] = $failMsg;
        return $this;
    }

    /**
    * Gets operationFlag
    *  操作类型标记位。
    *
    * @return int|null
    */
    public function getOperationFlag()
    {
        return $this->container['operationFlag'];
    }

    /**
    * Sets operationFlag
    *
    * @param int|null $operationFlag 操作类型标记位。
    *
    * @return $this
    */
    public function setOperationFlag($operationFlag)
    {
        $this->container['operationFlag'] = $operationFlag;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  修改日期。
    *
    * @return int|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param int|null $modifiedDate 修改日期。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  修改人。
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
    * @param string|null $modifiedBy 修改人。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
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

