<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionProgress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creating  创建集群进度，例如：29%
    * growing  扩容集群进度，例如：29%
    * restoring  恢复集群进度，例如：29%
    * snapshotting  集群快照进度，例如：29%
    * repairing  修复集群进度，例如：29%
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creating' => 'string',
            'growing' => 'string',
            'restoring' => 'string',
            'snapshotting' => 'string',
            'repairing' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creating  创建集群进度，例如：29%
    * growing  扩容集群进度，例如：29%
    * restoring  恢复集群进度，例如：29%
    * snapshotting  集群快照进度，例如：29%
    * repairing  修复集群进度，例如：29%
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creating' => null,
        'growing' => null,
        'restoring' => null,
        'snapshotting' => null,
        'repairing' => null
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
    * creating  创建集群进度，例如：29%
    * growing  扩容集群进度，例如：29%
    * restoring  恢复集群进度，例如：29%
    * snapshotting  集群快照进度，例如：29%
    * repairing  修复集群进度，例如：29%
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creating' => 'CREATING',
            'growing' => 'GROWING',
            'restoring' => 'RESTORING',
            'snapshotting' => 'SNAPSHOTTING',
            'repairing' => 'REPAIRING'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creating  创建集群进度，例如：29%
    * growing  扩容集群进度，例如：29%
    * restoring  恢复集群进度，例如：29%
    * snapshotting  集群快照进度，例如：29%
    * repairing  修复集群进度，例如：29%
    *
    * @var string[]
    */
    protected static $setters = [
            'creating' => 'setCreating',
            'growing' => 'setGrowing',
            'restoring' => 'setRestoring',
            'snapshotting' => 'setSnapshotting',
            'repairing' => 'setRepairing'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creating  创建集群进度，例如：29%
    * growing  扩容集群进度，例如：29%
    * restoring  恢复集群进度，例如：29%
    * snapshotting  集群快照进度，例如：29%
    * repairing  修复集群进度，例如：29%
    *
    * @var string[]
    */
    protected static $getters = [
            'creating' => 'getCreating',
            'growing' => 'getGrowing',
            'restoring' => 'getRestoring',
            'snapshotting' => 'getSnapshotting',
            'repairing' => 'getRepairing'
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
        $this->container['creating'] = isset($data['creating']) ? $data['creating'] : null;
        $this->container['growing'] = isset($data['growing']) ? $data['growing'] : null;
        $this->container['restoring'] = isset($data['restoring']) ? $data['restoring'] : null;
        $this->container['snapshotting'] = isset($data['snapshotting']) ? $data['snapshotting'] : null;
        $this->container['repairing'] = isset($data['repairing']) ? $data['repairing'] : null;
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
    * Gets creating
    *  创建集群进度，例如：29%
    *
    * @return string|null
    */
    public function getCreating()
    {
        return $this->container['creating'];
    }

    /**
    * Sets creating
    *
    * @param string|null $creating 创建集群进度，例如：29%
    *
    * @return $this
    */
    public function setCreating($creating)
    {
        $this->container['creating'] = $creating;
        return $this;
    }

    /**
    * Gets growing
    *  扩容集群进度，例如：29%
    *
    * @return string|null
    */
    public function getGrowing()
    {
        return $this->container['growing'];
    }

    /**
    * Sets growing
    *
    * @param string|null $growing 扩容集群进度，例如：29%
    *
    * @return $this
    */
    public function setGrowing($growing)
    {
        $this->container['growing'] = $growing;
        return $this;
    }

    /**
    * Gets restoring
    *  恢复集群进度，例如：29%
    *
    * @return string|null
    */
    public function getRestoring()
    {
        return $this->container['restoring'];
    }

    /**
    * Sets restoring
    *
    * @param string|null $restoring 恢复集群进度，例如：29%
    *
    * @return $this
    */
    public function setRestoring($restoring)
    {
        $this->container['restoring'] = $restoring;
        return $this;
    }

    /**
    * Gets snapshotting
    *  集群快照进度，例如：29%
    *
    * @return string|null
    */
    public function getSnapshotting()
    {
        return $this->container['snapshotting'];
    }

    /**
    * Sets snapshotting
    *
    * @param string|null $snapshotting 集群快照进度，例如：29%
    *
    * @return $this
    */
    public function setSnapshotting($snapshotting)
    {
        $this->container['snapshotting'] = $snapshotting;
        return $this;
    }

    /**
    * Gets repairing
    *  修复集群进度，例如：29%
    *
    * @return string|null
    */
    public function getRepairing()
    {
        return $this->container['repairing'];
    }

    /**
    * Sets repairing
    *
    * @param string|null $repairing 修复集群进度，例如：29%
    *
    * @return $this
    */
    public function setRepairing($repairing)
    {
        $this->container['repairing'] = $repairing;
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

