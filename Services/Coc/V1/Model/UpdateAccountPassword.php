<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAccountPassword implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAccountPassword';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * statusCode  改密结果状态码
    * detail  改密结果详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'planId' => 'string',
            'resourceId' => 'string',
            'accountName' => 'string',
            'statusCode' => 'string',
            'detail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * statusCode  改密结果状态码
    * detail  改密结果详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'planId' => null,
        'resourceId' => null,
        'accountName' => null,
        'statusCode' => null,
        'detail' => null
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
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * statusCode  改密结果状态码
    * detail  改密结果详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'planId' => 'plan_id',
            'resourceId' => 'resource_id',
            'accountName' => 'account_name',
            'statusCode' => 'status_code',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * statusCode  改密结果状态码
    * detail  改密结果详情
    *
    * @var string[]
    */
    protected static $setters = [
            'planId' => 'setPlanId',
            'resourceId' => 'setResourceId',
            'accountName' => 'setAccountName',
            'statusCode' => 'setStatusCode',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * statusCode  改密结果状态码
    * detail  改密结果详情
    *
    * @var string[]
    */
    protected static $getters = [
            'planId' => 'getPlanId',
            'resourceId' => 'getResourceId',
            'accountName' => 'getAccountName',
            'statusCode' => 'getStatusCode',
            'detail' => 'getDetail'
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
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['planId'] === null) {
            $invalidProperties[] = "'planId' can't be null";
        }
            if ((mb_strlen($this->container['planId']) > 36)) {
                $invalidProperties[] = "invalid value for 'planId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['planId']) < 1)) {
                $invalidProperties[] = "invalid value for 'planId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
            if ((mb_strlen($this->container['accountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['accountName']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['statusCode'] === null) {
            $invalidProperties[] = "'statusCode' can't be null";
        }
            if ((mb_strlen($this->container['statusCode']) > 16)) {
                $invalidProperties[] = "invalid value for 'statusCode', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['statusCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'statusCode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
            if ((mb_strlen($this->container['detail']) > 2048)) {
                $invalidProperties[] = "invalid value for 'detail', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['detail']) < 1)) {
                $invalidProperties[] = "invalid value for 'detail', the character length must be bigger than or equal to 1.";
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
    * Gets planId
    *  改密计划唯一UUID
    *
    * @return string
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string $planId 改密计划唯一UUID
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets resourceId
    *  改密资源id
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 改密资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets accountName
    *  改密账号名称
    *
    * @return string
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string $accountName 改密账号名称
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets statusCode
    *  改密结果状态码
    *
    * @return string
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string $statusCode 改密结果状态码
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets detail
    *  改密结果详情
    *
    * @return string
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string $detail 改密结果详情
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

