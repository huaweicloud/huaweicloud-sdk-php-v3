<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BtrfsSubvolumn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BtrfsSubvolumn';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  父卷的uuid
    * isSnapshot  子卷是否为快照
    * subvolId  子卷的ID
    * parentId  父卷ID
    * subvolName  子卷的名称
    * subvolMountPath  子卷的挂载路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'isSnapshot' => 'string',
            'subvolId' => 'string',
            'parentId' => 'string',
            'subvolName' => 'string',
            'subvolMountPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  父卷的uuid
    * isSnapshot  子卷是否为快照
    * subvolId  子卷的ID
    * parentId  父卷ID
    * subvolName  子卷的名称
    * subvolMountPath  子卷的挂载路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'isSnapshot' => null,
        'subvolId' => null,
        'parentId' => null,
        'subvolName' => null,
        'subvolMountPath' => null
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
    * uuid  父卷的uuid
    * isSnapshot  子卷是否为快照
    * subvolId  子卷的ID
    * parentId  父卷ID
    * subvolName  子卷的名称
    * subvolMountPath  子卷的挂载路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'isSnapshot' => 'is_snapshot',
            'subvolId' => 'subvol_id',
            'parentId' => 'parent_id',
            'subvolName' => 'subvol_name',
            'subvolMountPath' => 'subvol_mount_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  父卷的uuid
    * isSnapshot  子卷是否为快照
    * subvolId  子卷的ID
    * parentId  父卷ID
    * subvolName  子卷的名称
    * subvolMountPath  子卷的挂载路径
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'isSnapshot' => 'setIsSnapshot',
            'subvolId' => 'setSubvolId',
            'parentId' => 'setParentId',
            'subvolName' => 'setSubvolName',
            'subvolMountPath' => 'setSubvolMountPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  父卷的uuid
    * isSnapshot  子卷是否为快照
    * subvolId  子卷的ID
    * parentId  父卷ID
    * subvolName  子卷的名称
    * subvolMountPath  子卷的挂载路径
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'isSnapshot' => 'getIsSnapshot',
            'subvolId' => 'getSubvolId',
            'parentId' => 'getParentId',
            'subvolName' => 'getSubvolName',
            'subvolMountPath' => 'getSubvolMountPath'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['isSnapshot'] = isset($data['isSnapshot']) ? $data['isSnapshot'] : null;
        $this->container['subvolId'] = isset($data['subvolId']) ? $data['subvolId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['subvolName'] = isset($data['subvolName']) ? $data['subvolName'] : null;
        $this->container['subvolMountPath'] = isset($data['subvolMountPath']) ? $data['subvolMountPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
            if ((mb_strlen($this->container['uuid']) > 255)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['isSnapshot'] === null) {
            $invalidProperties[] = "'isSnapshot' can't be null";
        }
            if ((mb_strlen($this->container['isSnapshot']) > 255)) {
                $invalidProperties[] = "invalid value for 'isSnapshot', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['isSnapshot']) < 0)) {
                $invalidProperties[] = "invalid value for 'isSnapshot', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subvolId'] === null) {
            $invalidProperties[] = "'subvolId' can't be null";
        }
            if ((mb_strlen($this->container['subvolId']) > 255)) {
                $invalidProperties[] = "invalid value for 'subvolId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['subvolId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subvolId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
            if ((mb_strlen($this->container['parentId']) > 255)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['parentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subvolName'] === null) {
            $invalidProperties[] = "'subvolName' can't be null";
        }
            if ((mb_strlen($this->container['subvolName']) > 255)) {
                $invalidProperties[] = "invalid value for 'subvolName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['subvolName']) < 0)) {
                $invalidProperties[] = "invalid value for 'subvolName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subvolMountPath'] === null) {
            $invalidProperties[] = "'subvolMountPath' can't be null";
        }
            if ((mb_strlen($this->container['subvolMountPath']) > 255)) {
                $invalidProperties[] = "invalid value for 'subvolMountPath', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['subvolMountPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'subvolMountPath', the character length must be bigger than or equal to 0.";
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
    * Gets uuid
    *  父卷的uuid
    *
    * @return string
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string $uuid 父卷的uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets isSnapshot
    *  子卷是否为快照
    *
    * @return string
    */
    public function getIsSnapshot()
    {
        return $this->container['isSnapshot'];
    }

    /**
    * Sets isSnapshot
    *
    * @param string $isSnapshot 子卷是否为快照
    *
    * @return $this
    */
    public function setIsSnapshot($isSnapshot)
    {
        $this->container['isSnapshot'] = $isSnapshot;
        return $this;
    }

    /**
    * Gets subvolId
    *  子卷的ID
    *
    * @return string
    */
    public function getSubvolId()
    {
        return $this->container['subvolId'];
    }

    /**
    * Sets subvolId
    *
    * @param string $subvolId 子卷的ID
    *
    * @return $this
    */
    public function setSubvolId($subvolId)
    {
        $this->container['subvolId'] = $subvolId;
        return $this;
    }

    /**
    * Gets parentId
    *  父卷ID
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId 父卷ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets subvolName
    *  子卷的名称
    *
    * @return string
    */
    public function getSubvolName()
    {
        return $this->container['subvolName'];
    }

    /**
    * Sets subvolName
    *
    * @param string $subvolName 子卷的名称
    *
    * @return $this
    */
    public function setSubvolName($subvolName)
    {
        $this->container['subvolName'] = $subvolName;
        return $this;
    }

    /**
    * Gets subvolMountPath
    *  子卷的挂载路径
    *
    * @return string
    */
    public function getSubvolMountPath()
    {
        return $this->container['subvolMountPath'];
    }

    /**
    * Sets subvolMountPath
    *
    * @param string $subvolMountPath 子卷的挂载路径
    *
    * @return $this
    */
    public function setSubvolMountPath($subvolMountPath)
    {
        $this->container['subvolMountPath'] = $subvolMountPath;
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

