<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRenewRateOnPeriodReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRenewRateOnPeriodReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多10个资源ID。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多10个资源ID。|
    * periodType  |参数名称：周期类型：2：月3：年| |参数的约束及描述：周期类型：2：月3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3|
    * includeRelativeResources  是否包含关联资源一起续费询价。 false：不包含true：包含 此参数不携带或携带值为空串时，默认值为“false\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceIds' => 'string[]',
            'periodType' => 'int',
            'periodNum' => 'int',
            'includeRelativeResources' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多10个资源ID。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多10个资源ID。|
    * periodType  |参数名称：周期类型：2：月3：年| |参数的约束及描述：周期类型：2：月3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3|
    * includeRelativeResources  是否包含关联资源一起续费询价。 false：不包含true：包含 此参数不携带或携带值为空串时，默认值为“false\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceIds' => null,
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'includeRelativeResources' => null
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
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多10个资源ID。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多10个资源ID。|
    * periodType  |参数名称：周期类型：2：月3：年| |参数的约束及描述：周期类型：2：月3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3|
    * includeRelativeResources  是否包含关联资源一起续费询价。 false：不包含true：包含 此参数不携带或携带值为空串时，默认值为“false\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceIds' => 'resource_ids',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'includeRelativeResources' => 'include_relative_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多10个资源ID。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多10个资源ID。|
    * periodType  |参数名称：周期类型：2：月3：年| |参数的约束及描述：周期类型：2：月3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3|
    * includeRelativeResources  是否包含关联资源一起续费询价。 false：不包含true：包含 此参数不携带或携带值为空串时，默认值为“false\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceIds' => 'setResourceIds',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'includeRelativeResources' => 'setIncludeRelativeResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多10个资源ID。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多10个资源ID。|
    * periodType  |参数名称：周期类型：2：月3：年| |参数的约束及描述：周期类型：2：月3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3|
    * includeRelativeResources  是否包含关联资源一起续费询价。 false：不包含true：包含 此参数不携带或携带值为空串时，默认值为“false\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceIds' => 'getResourceIds',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'includeRelativeResources' => 'getIncludeRelativeResources'
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
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['includeRelativeResources'] = isset($data['includeRelativeResources']) ? $data['includeRelativeResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceIds'] === null) {
            $invalidProperties[] = "'resourceIds' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if (($this->container['periodType'] > 3)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 3.";
            }
            if (($this->container['periodType'] < 2)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 2.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 11)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 11.";
            }
            if (($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
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
    * Gets resourceIds
    *  |参数名称：资源ID列表。只支持传入主资源ID，最多10个资源ID。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多10个资源ID。|
    *
    * @return string[]
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[] $resourceIds |参数名称：资源ID列表。只支持传入主资源ID，最多10个资源ID。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多10个资源ID。|
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets periodType
    *  |参数名称：周期类型：2：月3：年| |参数的约束及描述：周期类型：2：月3：年|
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType |参数名称：周期类型：2：月3：年| |参数的约束及描述：周期类型：2：月3：年|
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  |参数名称：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3|
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum |参数名称：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11如果是年，目前支持1-3|
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets includeRelativeResources
    *  是否包含关联资源一起续费询价。 false：不包含true：包含 此参数不携带或携带值为空串时，默认值为“false\"。
    *
    * @return bool|null
    */
    public function getIncludeRelativeResources()
    {
        return $this->container['includeRelativeResources'];
    }

    /**
    * Sets includeRelativeResources
    *
    * @param bool|null $includeRelativeResources 是否包含关联资源一起续费询价。 false：不包含true：包含 此参数不携带或携带值为空串时，默认值为“false\"。
    *
    * @return $this
    */
    public function setIncludeRelativeResources($includeRelativeResources)
    {
        $this->container['includeRelativeResources'] = $includeRelativeResources;
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

