<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppDeleteResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppDeleteResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationId  应用id
    * applicationName  应用名称
    * status  删除是否成功 success | error
    * errorReason  删除失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationId' => 'string',
            'applicationName' => 'string',
            'status' => 'string',
            'errorReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationId  应用id
    * applicationName  应用名称
    * status  删除是否成功 success | error
    * errorReason  删除失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationId' => null,
        'applicationName' => null,
        'status' => null,
        'errorReason' => null
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
    * applicationId  应用id
    * applicationName  应用名称
    * status  删除是否成功 success | error
    * errorReason  删除失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationId' => 'application_id',
            'applicationName' => 'application_name',
            'status' => 'status',
            'errorReason' => 'error_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationId  应用id
    * applicationName  应用名称
    * status  删除是否成功 success | error
    * errorReason  删除失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationId' => 'setApplicationId',
            'applicationName' => 'setApplicationName',
            'status' => 'setStatus',
            'errorReason' => 'setErrorReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationId  应用id
    * applicationName  应用名称
    * status  删除是否成功 success | error
    * errorReason  删除失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationId' => 'getApplicationId',
            'applicationName' => 'getApplicationName',
            'status' => 'getStatus',
            'errorReason' => 'getErrorReason'
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
    const STATUS_SUCCESS = 'success';
    const STATUS_ERROR = 'error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_ERROR,
        ];
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
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorReason'] = isset($data['errorReason']) ? $data['errorReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['applicationId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['applicationId'])) {
                $invalidProperties[] = "invalid value for 'applicationId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) > 128)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) < 3)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['errorReason']) && (mb_strlen($this->container['errorReason']) > 100)) {
                $invalidProperties[] = "invalid value for 'errorReason', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['errorReason']) && (mb_strlen($this->container['errorReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorReason', the character length must be bigger than or equal to 0.";
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
    * Gets applicationId
    *  应用id
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用id
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets applicationName
    *  应用名称
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName 应用名称
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets status
    *  删除是否成功 success | error
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 删除是否成功 success | error
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorReason
    *  删除失败原因
    *
    * @return string|null
    */
    public function getErrorReason()
    {
        return $this->container['errorReason'];
    }

    /**
    * Sets errorReason
    *
    * @param string|null $errorReason 删除失败原因
    *
    * @return $this
    */
    public function setErrorReason($errorReason)
    {
        $this->container['errorReason'] = $errorReason;
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

