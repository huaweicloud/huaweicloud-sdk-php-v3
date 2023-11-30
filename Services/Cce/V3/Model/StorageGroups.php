<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StorageGroups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StorageGroups';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  storageGroups的名字，作为虚拟存储组的名字，因此各个group名字不能重复。 > - 当cceManaged=ture时，name必须为：vgpass。 > - 当数据盘作为临时存储卷时：name必须为：vg-everest-localvolume-ephemeral。 > - 当数据盘作为持久存储卷时：name必须为：vg-everest-localvolume-persistent。
    * cceManaged  k8s及runtime所属存储空间。有且仅有一个group被设置为true，不填默认false。
    * selectorNames  对应storageSelectors中的name，一个group可选择多个selector；但一个selector只能被一个group选择。
    * virtualSpaces  group中空间配置的详细管理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'cceManaged' => 'bool',
            'selectorNames' => 'string[]',
            'virtualSpaces' => '\HuaweiCloud\SDK\Cce\V3\Model\VirtualSpace[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  storageGroups的名字，作为虚拟存储组的名字，因此各个group名字不能重复。 > - 当cceManaged=ture时，name必须为：vgpass。 > - 当数据盘作为临时存储卷时：name必须为：vg-everest-localvolume-ephemeral。 > - 当数据盘作为持久存储卷时：name必须为：vg-everest-localvolume-persistent。
    * cceManaged  k8s及runtime所属存储空间。有且仅有一个group被设置为true，不填默认false。
    * selectorNames  对应storageSelectors中的name，一个group可选择多个selector；但一个selector只能被一个group选择。
    * virtualSpaces  group中空间配置的详细管理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'cceManaged' => null,
        'selectorNames' => null,
        'virtualSpaces' => null
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
    * name  storageGroups的名字，作为虚拟存储组的名字，因此各个group名字不能重复。 > - 当cceManaged=ture时，name必须为：vgpass。 > - 当数据盘作为临时存储卷时：name必须为：vg-everest-localvolume-ephemeral。 > - 当数据盘作为持久存储卷时：name必须为：vg-everest-localvolume-persistent。
    * cceManaged  k8s及runtime所属存储空间。有且仅有一个group被设置为true，不填默认false。
    * selectorNames  对应storageSelectors中的name，一个group可选择多个selector；但一个selector只能被一个group选择。
    * virtualSpaces  group中空间配置的详细管理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'cceManaged' => 'cceManaged',
            'selectorNames' => 'selectorNames',
            'virtualSpaces' => 'virtualSpaces'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  storageGroups的名字，作为虚拟存储组的名字，因此各个group名字不能重复。 > - 当cceManaged=ture时，name必须为：vgpass。 > - 当数据盘作为临时存储卷时：name必须为：vg-everest-localvolume-ephemeral。 > - 当数据盘作为持久存储卷时：name必须为：vg-everest-localvolume-persistent。
    * cceManaged  k8s及runtime所属存储空间。有且仅有一个group被设置为true，不填默认false。
    * selectorNames  对应storageSelectors中的name，一个group可选择多个selector；但一个selector只能被一个group选择。
    * virtualSpaces  group中空间配置的详细管理。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'cceManaged' => 'setCceManaged',
            'selectorNames' => 'setSelectorNames',
            'virtualSpaces' => 'setVirtualSpaces'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  storageGroups的名字，作为虚拟存储组的名字，因此各个group名字不能重复。 > - 当cceManaged=ture时，name必须为：vgpass。 > - 当数据盘作为临时存储卷时：name必须为：vg-everest-localvolume-ephemeral。 > - 当数据盘作为持久存储卷时：name必须为：vg-everest-localvolume-persistent。
    * cceManaged  k8s及runtime所属存储空间。有且仅有一个group被设置为true，不填默认false。
    * selectorNames  对应storageSelectors中的name，一个group可选择多个selector；但一个selector只能被一个group选择。
    * virtualSpaces  group中空间配置的详细管理。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'cceManaged' => 'getCceManaged',
            'selectorNames' => 'getSelectorNames',
            'virtualSpaces' => 'getVirtualSpaces'
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
        $this->container['cceManaged'] = isset($data['cceManaged']) ? $data['cceManaged'] : null;
        $this->container['selectorNames'] = isset($data['selectorNames']) ? $data['selectorNames'] : null;
        $this->container['virtualSpaces'] = isset($data['virtualSpaces']) ? $data['virtualSpaces'] : null;
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
        if ($this->container['selectorNames'] === null) {
            $invalidProperties[] = "'selectorNames' can't be null";
        }
        if ($this->container['virtualSpaces'] === null) {
            $invalidProperties[] = "'virtualSpaces' can't be null";
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
    *  storageGroups的名字，作为虚拟存储组的名字，因此各个group名字不能重复。 > - 当cceManaged=ture时，name必须为：vgpass。 > - 当数据盘作为临时存储卷时：name必须为：vg-everest-localvolume-ephemeral。 > - 当数据盘作为持久存储卷时：name必须为：vg-everest-localvolume-persistent。
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
    * @param string $name storageGroups的名字，作为虚拟存储组的名字，因此各个group名字不能重复。 > - 当cceManaged=ture时，name必须为：vgpass。 > - 当数据盘作为临时存储卷时：name必须为：vg-everest-localvolume-ephemeral。 > - 当数据盘作为持久存储卷时：name必须为：vg-everest-localvolume-persistent。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cceManaged
    *  k8s及runtime所属存储空间。有且仅有一个group被设置为true，不填默认false。
    *
    * @return bool|null
    */
    public function getCceManaged()
    {
        return $this->container['cceManaged'];
    }

    /**
    * Sets cceManaged
    *
    * @param bool|null $cceManaged k8s及runtime所属存储空间。有且仅有一个group被设置为true，不填默认false。
    *
    * @return $this
    */
    public function setCceManaged($cceManaged)
    {
        $this->container['cceManaged'] = $cceManaged;
        return $this;
    }

    /**
    * Gets selectorNames
    *  对应storageSelectors中的name，一个group可选择多个selector；但一个selector只能被一个group选择。
    *
    * @return string[]
    */
    public function getSelectorNames()
    {
        return $this->container['selectorNames'];
    }

    /**
    * Sets selectorNames
    *
    * @param string[] $selectorNames 对应storageSelectors中的name，一个group可选择多个selector；但一个selector只能被一个group选择。
    *
    * @return $this
    */
    public function setSelectorNames($selectorNames)
    {
        $this->container['selectorNames'] = $selectorNames;
        return $this;
    }

    /**
    * Gets virtualSpaces
    *  group中空间配置的详细管理。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\VirtualSpace[]
    */
    public function getVirtualSpaces()
    {
        return $this->container['virtualSpaces'];
    }

    /**
    * Sets virtualSpaces
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\VirtualSpace[] $virtualSpaces group中空间配置的详细管理。
    *
    * @return $this
    */
    public function setVirtualSpaces($virtualSpaces)
    {
        $this->container['virtualSpaces'] = $virtualSpaces;
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

