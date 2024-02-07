<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bindingInstanceService  绑定接口可以加，标识请求是从哪个服务调过来的
    * globalEipId  global_eip_id
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bindingInstanceService' => 'string',
            'globalEipId' => 'string',
            'body' => '\HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceGlobalEipRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bindingInstanceService  绑定接口可以加，标识请求是从哪个服务调过来的
    * globalEipId  global_eip_id
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bindingInstanceService' => null,
        'globalEipId' => null,
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
    * bindingInstanceService  绑定接口可以加，标识请求是从哪个服务调过来的
    * globalEipId  global_eip_id
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bindingInstanceService' => 'binding-instance-service',
            'globalEipId' => 'global_eip_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bindingInstanceService  绑定接口可以加，标识请求是从哪个服务调过来的
    * globalEipId  global_eip_id
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'bindingInstanceService' => 'setBindingInstanceService',
            'globalEipId' => 'setGlobalEipId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bindingInstanceService  绑定接口可以加，标识请求是从哪个服务调过来的
    * globalEipId  global_eip_id
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'bindingInstanceService' => 'getBindingInstanceService',
            'globalEipId' => 'getGlobalEipId',
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
        $this->container['bindingInstanceService'] = isset($data['bindingInstanceService']) ? $data['bindingInstanceService'] : null;
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
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
        if ($this->container['globalEipId'] === null) {
            $invalidProperties[] = "'globalEipId' can't be null";
        }
            if ((mb_strlen($this->container['globalEipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['globalEipId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalEipId'])) {
                $invalidProperties[] = "invalid value for 'globalEipId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets bindingInstanceService
    *  绑定接口可以加，标识请求是从哪个服务调过来的
    *
    * @return string|null
    */
    public function getBindingInstanceService()
    {
        return $this->container['bindingInstanceService'];
    }

    /**
    * Sets bindingInstanceService
    *
    * @param string|null $bindingInstanceService 绑定接口可以加，标识请求是从哪个服务调过来的
    *
    * @return $this
    */
    public function setBindingInstanceService($bindingInstanceService)
    {
        $this->container['bindingInstanceService'] = $bindingInstanceService;
        return $this;
    }

    /**
    * Gets globalEipId
    *  global_eip_id
    *
    * @return string
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string $globalEipId global_eip_id
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceGlobalEipRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceGlobalEipRequestBody|null $body body
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

