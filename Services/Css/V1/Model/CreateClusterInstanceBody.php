<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * nics  nics
    * availabilityZone  可用区。需要指定可用区的名称（可用分区名称）。 默认指定单AZ。指定多AZ时，各个可用分区名称需要使用英文逗号（,）分隔，以“华北-北京四”为例，选择三AZ时，availability_zone取值为cn-north-4a,cn-north-4b,cn-north-4c。如果使用单AZ，availability_zone默认取值为空。 >说明   选择多AZ时，各个可用分区名称不能重复输入，并且要求节点个数大于等于AZ个数。      如果节点个数为AZ个数的倍数，节点将会均匀的分布到各个AZ。如果节点个数不为AZ个数的倍数时，各个AZ分布的节点数量之差的绝对值小于等于1。     可用分区名称，请在[[地区和终端节点](https://developer.huaweicloud.com/endpoint?CSS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CSS)](tag:hk_hws)获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'volume' => '\HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceVolumeBody',
            'nics' => '\HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceNicsBody',
            'availabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * nics  nics
    * availabilityZone  可用区。需要指定可用区的名称（可用分区名称）。 默认指定单AZ。指定多AZ时，各个可用分区名称需要使用英文逗号（,）分隔，以“华北-北京四”为例，选择三AZ时，availability_zone取值为cn-north-4a,cn-north-4b,cn-north-4c。如果使用单AZ，availability_zone默认取值为空。 >说明   选择多AZ时，各个可用分区名称不能重复输入，并且要求节点个数大于等于AZ个数。      如果节点个数为AZ个数的倍数，节点将会均匀的分布到各个AZ。如果节点个数不为AZ个数的倍数时，各个AZ分布的节点数量之差的绝对值小于等于1。     可用分区名称，请在[[地区和终端节点](https://developer.huaweicloud.com/endpoint?CSS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CSS)](tag:hk_hws)获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'volume' => null,
        'nics' => null,
        'availabilityZone' => null
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
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * nics  nics
    * availabilityZone  可用区。需要指定可用区的名称（可用分区名称）。 默认指定单AZ。指定多AZ时，各个可用分区名称需要使用英文逗号（,）分隔，以“华北-北京四”为例，选择三AZ时，availability_zone取值为cn-north-4a,cn-north-4b,cn-north-4c。如果使用单AZ，availability_zone默认取值为空。 >说明   选择多AZ时，各个可用分区名称不能重复输入，并且要求节点个数大于等于AZ个数。      如果节点个数为AZ个数的倍数，节点将会均匀的分布到各个AZ。如果节点个数不为AZ个数的倍数时，各个AZ分布的节点数量之差的绝对值小于等于1。     可用分区名称，请在[[地区和终端节点](https://developer.huaweicloud.com/endpoint?CSS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CSS)](tag:hk_hws)获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavorRef',
            'volume' => 'volume',
            'nics' => 'nics',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * nics  nics
    * availabilityZone  可用区。需要指定可用区的名称（可用分区名称）。 默认指定单AZ。指定多AZ时，各个可用分区名称需要使用英文逗号（,）分隔，以“华北-北京四”为例，选择三AZ时，availability_zone取值为cn-north-4a,cn-north-4b,cn-north-4c。如果使用单AZ，availability_zone默认取值为空。 >说明   选择多AZ时，各个可用分区名称不能重复输入，并且要求节点个数大于等于AZ个数。      如果节点个数为AZ个数的倍数，节点将会均匀的分布到各个AZ。如果节点个数不为AZ个数的倍数时，各个AZ分布的节点数量之差的绝对值小于等于1。     可用分区名称，请在[[地区和终端节点](https://developer.huaweicloud.com/endpoint?CSS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CSS)](tag:hk_hws)获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'volume' => 'setVolume',
            'nics' => 'setNics',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * nics  nics
    * availabilityZone  可用区。需要指定可用区的名称（可用分区名称）。 默认指定单AZ。指定多AZ时，各个可用分区名称需要使用英文逗号（,）分隔，以“华北-北京四”为例，选择三AZ时，availability_zone取值为cn-north-4a,cn-north-4b,cn-north-4c。如果使用单AZ，availability_zone默认取值为空。 >说明   选择多AZ时，各个可用分区名称不能重复输入，并且要求节点个数大于等于AZ个数。      如果节点个数为AZ个数的倍数，节点将会均匀的分布到各个AZ。如果节点个数不为AZ个数的倍数时，各个AZ分布的节点数量之差的绝对值小于等于1。     可用分区名称，请在[[地区和终端节点](https://developer.huaweicloud.com/endpoint?CSS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CSS)](tag:hk_hws)获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'volume' => 'getVolume',
            'nics' => 'getNics',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
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
    * Gets flavorRef
    *  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceVolumeBody
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceVolumeBody $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets nics
    *  nics
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceNicsBody
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceNicsBody $nics nics
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区。需要指定可用区的名称（可用分区名称）。 默认指定单AZ。指定多AZ时，各个可用分区名称需要使用英文逗号（,）分隔，以“华北-北京四”为例，选择三AZ时，availability_zone取值为cn-north-4a,cn-north-4b,cn-north-4c。如果使用单AZ，availability_zone默认取值为空。 >说明   选择多AZ时，各个可用分区名称不能重复输入，并且要求节点个数大于等于AZ个数。      如果节点个数为AZ个数的倍数，节点将会均匀的分布到各个AZ。如果节点个数不为AZ个数的倍数时，各个AZ分布的节点数量之差的绝对值小于等于1。     可用分区名称，请在[[地区和终端节点](https://developer.huaweicloud.com/endpoint?CSS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CSS)](tag:hk_hws)获取。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 可用区。需要指定可用区的名称（可用分区名称）。 默认指定单AZ。指定多AZ时，各个可用分区名称需要使用英文逗号（,）分隔，以“华北-北京四”为例，选择三AZ时，availability_zone取值为cn-north-4a,cn-north-4b,cn-north-4c。如果使用单AZ，availability_zone默认取值为空。 >说明   选择多AZ时，各个可用分区名称不能重复输入，并且要求节点个数大于等于AZ个数。      如果节点个数为AZ个数的倍数，节点将会均匀的分布到各个AZ。如果节点个数不为AZ个数的倍数时，各个AZ分布的节点数量之差的绝对值小于等于1。     可用分区名称，请在[[地区和终端节点](https://developer.huaweicloud.com/endpoint?CSS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CSS)](tag:hk_hws)获取。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

