<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContinueRollbackStackRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContinueRollbackStackRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientRequestId' => 'string',
            'stackName' => 'string',
            'body' => '\HuaweiCloud\SDK\Rfs\V1\Model\ContinueRollbackStackRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientRequestId' => null,
        'stackName' => null,
        'body' => null
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
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientRequestId' => 'Client-Request-Id',
            'stackName' => 'stack_name',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'clientRequestId' => 'setClientRequestId',
            'stackName' => 'setStackName',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'clientRequestId' => 'getClientRequestId',
            'stackName' => 'getStackName',
            'body' => 'getBody'
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clientRequestId'] === null) {
            $invalidProperties[] = "'clientRequestId' can't be null";
        }
            if ((mb_strlen($this->container['clientRequestId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clientRequestId']) < 36)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^[A-Za-z0-9]+[A-Za-z0-9-]*$/", $this->container['clientRequestId'])) {
                $invalidProperties[] = "invalid value for 'clientRequestId', must be conform to the pattern /^[A-Za-z0-9]+[A-Za-z0-9-]*$/.";
            }
        if ($this->container['stackName'] === null) {
            $invalidProperties[] = "'stackName' can't be null";
        }
            if ((mb_strlen($this->container['stackName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['stackName'])) {
                $invalidProperties[] = "invalid value for 'stackName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
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
    * Gets clientRequestId
    *  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    *
    * @return string
    */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
    * Sets clientRequestId
    *
    * @param string $clientRequestId 用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    *
    * @return $this
    */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;
        return $this;
    }

    /**
    * Gets stackName
    *  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return string
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string $stackName 资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Rfs\V1\Model\ContinueRollbackStackRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Rfs\V1\Model\ContinueRollbackStackRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

