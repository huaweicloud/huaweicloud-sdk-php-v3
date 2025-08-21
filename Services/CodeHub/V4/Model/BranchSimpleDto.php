<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BranchSimpleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BranchSimpleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'default' => 'bool',
            'canDelete' => 'bool',
            'canRead' => 'bool',
            'canDownload' => 'bool',
            'canPush' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'default' => null,
        'canDelete' => null,
        'canRead' => null,
        'canDownload' => null,
        'canPush' => null
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
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'default' => 'default',
            'canDelete' => 'can_delete',
            'canRead' => 'can_read',
            'canDownload' => 'can_download',
            'canPush' => 'can_push'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'default' => 'setDefault',
            'canDelete' => 'setCanDelete',
            'canRead' => 'setCanRead',
            'canDownload' => 'setCanDownload',
            'canPush' => 'setCanPush'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'default' => 'getDefault',
            'canDelete' => 'getCanDelete',
            'canRead' => 'getCanRead',
            'canDownload' => 'getCanDownload',
            'canPush' => 'getCanPush'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canRead'] = isset($data['canRead']) ? $data['canRead'] : null;
        $this->container['canDownload'] = isset($data['canDownload']) ? $data['canDownload'] : null;
        $this->container['canPush'] = isset($data['canPush']) ? $data['canPush'] : null;
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
    * Gets name
    *  分支名称
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
    * @param string|null $name 分支名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets default
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 是否为默认分支
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets canDelete
    *  用户是否为默认分支
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete 用户是否为默认分支
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets canRead
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getCanRead()
    {
        return $this->container['canRead'];
    }

    /**
    * Sets canRead
    *
    * @param bool|null $canRead 是否为默认分支
    *
    * @return $this
    */
    public function setCanRead($canRead)
    {
        $this->container['canRead'] = $canRead;
        return $this;
    }

    /**
    * Gets canDownload
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getCanDownload()
    {
        return $this->container['canDownload'];
    }

    /**
    * Sets canDownload
    *
    * @param bool|null $canDownload 是否为默认分支
    *
    * @return $this
    */
    public function setCanDownload($canDownload)
    {
        $this->container['canDownload'] = $canDownload;
        return $this;
    }

    /**
    * Gets canPush
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getCanPush()
    {
        return $this->container['canPush'];
    }

    /**
    * Sets canPush
    *
    * @param bool|null $canPush 是否为默认分支
    *
    * @return $this
    */
    public function setCanPush($canPush)
    {
        $this->container['canPush'] = $canPush;
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

