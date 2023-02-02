<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStackRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStackRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackId  资源栈Id
    * description  资源栈的描述
    * enableDeletionProtection  是否开启删除保护
    * enableAutoRollback  是否开启自动回滚
    * agencies  委托列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackId' => 'string',
            'description' => 'string',
            'enableDeletionProtection' => 'bool',
            'enableAutoRollback' => 'bool',
            'agencies' => '\HuaweiCloud\SDK\Aos\V1\Model\Agency[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackId  资源栈Id
    * description  资源栈的描述
    * enableDeletionProtection  是否开启删除保护
    * enableAutoRollback  是否开启自动回滚
    * agencies  委托列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackId' => null,
        'description' => null,
        'enableDeletionProtection' => null,
        'enableAutoRollback' => null,
        'agencies' => null
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
    * stackId  资源栈Id
    * description  资源栈的描述
    * enableDeletionProtection  是否开启删除保护
    * enableAutoRollback  是否开启自动回滚
    * agencies  委托列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackId' => 'stack_id',
            'description' => 'description',
            'enableDeletionProtection' => 'enable_deletion_protection',
            'enableAutoRollback' => 'enable_auto_rollback',
            'agencies' => 'agencies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackId  资源栈Id
    * description  资源栈的描述
    * enableDeletionProtection  是否开启删除保护
    * enableAutoRollback  是否开启自动回滚
    * agencies  委托列表
    *
    * @var string[]
    */
    protected static $setters = [
            'stackId' => 'setStackId',
            'description' => 'setDescription',
            'enableDeletionProtection' => 'setEnableDeletionProtection',
            'enableAutoRollback' => 'setEnableAutoRollback',
            'agencies' => 'setAgencies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackId  资源栈Id
    * description  资源栈的描述
    * enableDeletionProtection  是否开启删除保护
    * enableAutoRollback  是否开启自动回滚
    * agencies  委托列表
    *
    * @var string[]
    */
    protected static $getters = [
            'stackId' => 'getStackId',
            'description' => 'getDescription',
            'enableDeletionProtection' => 'getEnableDeletionProtection',
            'enableAutoRollback' => 'getEnableAutoRollback',
            'agencies' => 'getAgencies'
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
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableDeletionProtection'] = isset($data['enableDeletionProtection']) ? $data['enableDeletionProtection'] : null;
        $this->container['enableAutoRollback'] = isset($data['enableAutoRollback']) ? $data['enableAutoRollback'] : null;
        $this->container['agencies'] = isset($data['agencies']) ? $data['agencies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackId'])) {
                $invalidProperties[] = "invalid value for 'stackId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets stackId
    *  资源栈Id
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 资源栈Id
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets description
    *  资源栈的描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 资源栈的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enableDeletionProtection
    *  是否开启删除保护
    *
    * @return bool|null
    */
    public function getEnableDeletionProtection()
    {
        return $this->container['enableDeletionProtection'];
    }

    /**
    * Sets enableDeletionProtection
    *
    * @param bool|null $enableDeletionProtection 是否开启删除保护
    *
    * @return $this
    */
    public function setEnableDeletionProtection($enableDeletionProtection)
    {
        $this->container['enableDeletionProtection'] = $enableDeletionProtection;
        return $this;
    }

    /**
    * Gets enableAutoRollback
    *  是否开启自动回滚
    *
    * @return bool|null
    */
    public function getEnableAutoRollback()
    {
        return $this->container['enableAutoRollback'];
    }

    /**
    * Sets enableAutoRollback
    *
    * @param bool|null $enableAutoRollback 是否开启自动回滚
    *
    * @return $this
    */
    public function setEnableAutoRollback($enableAutoRollback)
    {
        $this->container['enableAutoRollback'] = $enableAutoRollback;
        return $this;
    }

    /**
    * Gets agencies
    *  委托列表
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null
    */
    public function getAgencies()
    {
        return $this->container['agencies'];
    }

    /**
    * Sets agencies
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null $agencies 委托列表
    *
    * @return $this
    */
    public function setAgencies($agencies)
    {
        $this->container['agencies'] = $agencies;
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

