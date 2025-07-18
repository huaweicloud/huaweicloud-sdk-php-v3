<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePublicIP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePublicIP';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  **参数解释**： 已有的弹性IP的ID列表。数量不得大于待创建节点数 > 若已配置ids参数，则无需配置count和eip参数 **约束限制**： 该参数仅给节点使用
    * count  **参数解释**： 要动态创建的弹性IP个数。 > count参数与eip参数必须同时配置。 **约束限制**： 该参数仅给节点使用
    * eip  eip
    * iptype  **参数解释**： 表示节点所属分区。分区可以选择中心云[或者[边缘小站](https://support.huaweicloud.com/usermanual-cloudpond/ies_02_0401.html)。](tag:hws)[或者[边缘小站](https://support.huaweicloud.com/intl/zh-cn/usermanual-cloudpond/ies_02_0401.html)。](tag:hws_hk) 仅开启了对分布式云支持的Turbo集群支持指定该字段。 弹性IP类型，取值请参见申请EIP接口中publicip.type说明。 [链接请参见[申请EIP](https://support.huaweicloud.com/api-eip/eip_api_0001.html)](tag:hws) [链接请参见[申请EIP](https://support.huaweicloud.com/intl/zh-cn/api-eip/eip_api_0001.html)](tag:hws_hk) **约束限制**： 该参数仅给节点池使用
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'string[]',
            'count' => 'int',
            'eip' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeEIPSpec',
            'iptype' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeBandwidth'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  **参数解释**： 已有的弹性IP的ID列表。数量不得大于待创建节点数 > 若已配置ids参数，则无需配置count和eip参数 **约束限制**： 该参数仅给节点使用
    * count  **参数解释**： 要动态创建的弹性IP个数。 > count参数与eip参数必须同时配置。 **约束限制**： 该参数仅给节点使用
    * eip  eip
    * iptype  **参数解释**： 表示节点所属分区。分区可以选择中心云[或者[边缘小站](https://support.huaweicloud.com/usermanual-cloudpond/ies_02_0401.html)。](tag:hws)[或者[边缘小站](https://support.huaweicloud.com/intl/zh-cn/usermanual-cloudpond/ies_02_0401.html)。](tag:hws_hk) 仅开启了对分布式云支持的Turbo集群支持指定该字段。 弹性IP类型，取值请参见申请EIP接口中publicip.type说明。 [链接请参见[申请EIP](https://support.huaweicloud.com/api-eip/eip_api_0001.html)](tag:hws) [链接请参见[申请EIP](https://support.huaweicloud.com/intl/zh-cn/api-eip/eip_api_0001.html)](tag:hws_hk) **约束限制**： 该参数仅给节点池使用
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => null,
        'count' => 'int32',
        'eip' => null,
        'iptype' => null,
        'bandwidth' => null
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
    * ids  **参数解释**： 已有的弹性IP的ID列表。数量不得大于待创建节点数 > 若已配置ids参数，则无需配置count和eip参数 **约束限制**： 该参数仅给节点使用
    * count  **参数解释**： 要动态创建的弹性IP个数。 > count参数与eip参数必须同时配置。 **约束限制**： 该参数仅给节点使用
    * eip  eip
    * iptype  **参数解释**： 表示节点所属分区。分区可以选择中心云[或者[边缘小站](https://support.huaweicloud.com/usermanual-cloudpond/ies_02_0401.html)。](tag:hws)[或者[边缘小站](https://support.huaweicloud.com/intl/zh-cn/usermanual-cloudpond/ies_02_0401.html)。](tag:hws_hk) 仅开启了对分布式云支持的Turbo集群支持指定该字段。 弹性IP类型，取值请参见申请EIP接口中publicip.type说明。 [链接请参见[申请EIP](https://support.huaweicloud.com/api-eip/eip_api_0001.html)](tag:hws) [链接请参见[申请EIP](https://support.huaweicloud.com/intl/zh-cn/api-eip/eip_api_0001.html)](tag:hws_hk) **约束限制**： 该参数仅给节点池使用
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'count' => 'count',
            'eip' => 'eip',
            'iptype' => 'iptype',
            'bandwidth' => 'bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  **参数解释**： 已有的弹性IP的ID列表。数量不得大于待创建节点数 > 若已配置ids参数，则无需配置count和eip参数 **约束限制**： 该参数仅给节点使用
    * count  **参数解释**： 要动态创建的弹性IP个数。 > count参数与eip参数必须同时配置。 **约束限制**： 该参数仅给节点使用
    * eip  eip
    * iptype  **参数解释**： 表示节点所属分区。分区可以选择中心云[或者[边缘小站](https://support.huaweicloud.com/usermanual-cloudpond/ies_02_0401.html)。](tag:hws)[或者[边缘小站](https://support.huaweicloud.com/intl/zh-cn/usermanual-cloudpond/ies_02_0401.html)。](tag:hws_hk) 仅开启了对分布式云支持的Turbo集群支持指定该字段。 弹性IP类型，取值请参见申请EIP接口中publicip.type说明。 [链接请参见[申请EIP](https://support.huaweicloud.com/api-eip/eip_api_0001.html)](tag:hws) [链接请参见[申请EIP](https://support.huaweicloud.com/intl/zh-cn/api-eip/eip_api_0001.html)](tag:hws_hk) **约束限制**： 该参数仅给节点池使用
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'count' => 'setCount',
            'eip' => 'setEip',
            'iptype' => 'setIptype',
            'bandwidth' => 'setBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  **参数解释**： 已有的弹性IP的ID列表。数量不得大于待创建节点数 > 若已配置ids参数，则无需配置count和eip参数 **约束限制**： 该参数仅给节点使用
    * count  **参数解释**： 要动态创建的弹性IP个数。 > count参数与eip参数必须同时配置。 **约束限制**： 该参数仅给节点使用
    * eip  eip
    * iptype  **参数解释**： 表示节点所属分区。分区可以选择中心云[或者[边缘小站](https://support.huaweicloud.com/usermanual-cloudpond/ies_02_0401.html)。](tag:hws)[或者[边缘小站](https://support.huaweicloud.com/intl/zh-cn/usermanual-cloudpond/ies_02_0401.html)。](tag:hws_hk) 仅开启了对分布式云支持的Turbo集群支持指定该字段。 弹性IP类型，取值请参见申请EIP接口中publicip.type说明。 [链接请参见[申请EIP](https://support.huaweicloud.com/api-eip/eip_api_0001.html)](tag:hws) [链接请参见[申请EIP](https://support.huaweicloud.com/intl/zh-cn/api-eip/eip_api_0001.html)](tag:hws_hk) **约束限制**： 该参数仅给节点池使用
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'count' => 'getCount',
            'eip' => 'getEip',
            'iptype' => 'getIptype',
            'bandwidth' => 'getBandwidth'
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['iptype'] = isset($data['iptype']) ? $data['iptype'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
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
    * Gets ids
    *  **参数解释**： 已有的弹性IP的ID列表。数量不得大于待创建节点数 > 若已配置ids参数，则无需配置count和eip参数 **约束限制**： 该参数仅给节点使用
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids **参数解释**： 已有的弹性IP的ID列表。数量不得大于待创建节点数 > 若已配置ids参数，则无需配置count和eip参数 **约束限制**： 该参数仅给节点使用
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 要动态创建的弹性IP个数。 > count参数与eip参数必须同时配置。 **约束限制**： 该参数仅给节点使用
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**： 要动态创建的弹性IP个数。 > count参数与eip参数必须同时配置。 **约束限制**： 该参数仅给节点使用
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets eip
    *  eip
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeEIPSpec|null
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeEIPSpec|null $eip eip
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets iptype
    *  **参数解释**： 表示节点所属分区。分区可以选择中心云[或者[边缘小站](https://support.huaweicloud.com/usermanual-cloudpond/ies_02_0401.html)。](tag:hws)[或者[边缘小站](https://support.huaweicloud.com/intl/zh-cn/usermanual-cloudpond/ies_02_0401.html)。](tag:hws_hk) 仅开启了对分布式云支持的Turbo集群支持指定该字段。 弹性IP类型，取值请参见申请EIP接口中publicip.type说明。 [链接请参见[申请EIP](https://support.huaweicloud.com/api-eip/eip_api_0001.html)](tag:hws) [链接请参见[申请EIP](https://support.huaweicloud.com/intl/zh-cn/api-eip/eip_api_0001.html)](tag:hws_hk) **约束限制**： 该参数仅给节点池使用
    *
    * @return string|null
    */
    public function getIptype()
    {
        return $this->container['iptype'];
    }

    /**
    * Sets iptype
    *
    * @param string|null $iptype **参数解释**： 表示节点所属分区。分区可以选择中心云[或者[边缘小站](https://support.huaweicloud.com/usermanual-cloudpond/ies_02_0401.html)。](tag:hws)[或者[边缘小站](https://support.huaweicloud.com/intl/zh-cn/usermanual-cloudpond/ies_02_0401.html)。](tag:hws_hk) 仅开启了对分布式云支持的Turbo集群支持指定该字段。 弹性IP类型，取值请参见申请EIP接口中publicip.type说明。 [链接请参见[申请EIP](https://support.huaweicloud.com/api-eip/eip_api_0001.html)](tag:hws) [链接请参见[申请EIP](https://support.huaweicloud.com/intl/zh-cn/api-eip/eip_api_0001.html)](tag:hws_hk) **约束限制**： 该参数仅给节点池使用
    *
    * @return $this
    */
    public function setIptype($iptype)
    {
        $this->container['iptype'] = $iptype;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeBandwidth|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeBandwidth|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
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

