<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolMetadataDeletion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolMetadataDeletion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数描述**： 系统自动生成的pool名称，相当于poolId。 **取值范围**： 不涉及。
    * creationTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * deletionTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * labels  labels
    * annotations  annotations
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'creationTimestamp' => 'string',
            'deletionTimestamp' => 'string',
            'labels' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolMetaLabels',
            'annotations' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolMetaAnnotations'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数描述**： 系统自动生成的pool名称，相当于poolId。 **取值范围**： 不涉及。
    * creationTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * deletionTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * labels  labels
    * annotations  annotations
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'creationTimestamp' => null,
        'deletionTimestamp' => null,
        'labels' => null,
        'annotations' => null
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
    * name  **参数描述**： 系统自动生成的pool名称，相当于poolId。 **取值范围**： 不涉及。
    * creationTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * deletionTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * labels  labels
    * annotations  annotations
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'creationTimestamp' => 'creationTimestamp',
            'deletionTimestamp' => 'deletionTimestamp',
            'labels' => 'labels',
            'annotations' => 'annotations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数描述**： 系统自动生成的pool名称，相当于poolId。 **取值范围**： 不涉及。
    * creationTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * deletionTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * labels  labels
    * annotations  annotations
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'creationTimestamp' => 'setCreationTimestamp',
            'deletionTimestamp' => 'setDeletionTimestamp',
            'labels' => 'setLabels',
            'annotations' => 'setAnnotations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数描述**： 系统自动生成的pool名称，相当于poolId。 **取值范围**： 不涉及。
    * creationTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * deletionTimestamp  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    * labels  labels
    * annotations  annotations
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'creationTimestamp' => 'getCreationTimestamp',
            'deletionTimestamp' => 'getDeletionTimestamp',
            'labels' => 'getLabels',
            'annotations' => 'getAnnotations'
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
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['deletionTimestamp'] = isset($data['deletionTimestamp']) ? $data['deletionTimestamp'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['creationTimestamp'] === null) {
            $invalidProperties[] = "'creationTimestamp' can't be null";
        }
        if ($this->container['deletionTimestamp'] === null) {
            $invalidProperties[] = "'deletionTimestamp' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
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
    * Gets name
    *  **参数描述**： 系统自动生成的pool名称，相当于poolId。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数描述**： 系统自动生成的pool名称，相当于poolId。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string $creationTimestamp **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets deletionTimestamp
    *  **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getDeletionTimestamp()
    {
        return $this->container['deletionTimestamp'];
    }

    /**
    * Sets deletionTimestamp
    *
    * @param string $deletionTimestamp **参数描述**： 时间戳，例如\"2021-11-01T03:49:41Z\"。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDeletionTimestamp($deletionTimestamp)
    {
        $this->container['deletionTimestamp'] = $deletionTimestamp;
        return $this;
    }

    /**
    * Gets labels
    *  labels
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolMetaLabels
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolMetaLabels $labels labels
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets annotations
    *  annotations
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolMetaAnnotations|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolMetaAnnotations|null $annotations annotations
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
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

