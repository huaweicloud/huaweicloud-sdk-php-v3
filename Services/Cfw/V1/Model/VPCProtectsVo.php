<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VPCProtectsVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VPCProtectsVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  总防护VPC数
    * selfTotal  防火墙东西向防护可进行跨账号防护VPC，self_total表示本项目防护VPC总数。
    * otherTotal  防火墙东西向防护可进行跨账号防护VPC，other_total表示其他项目防护VPC数
    * protectVpcs  防火墙东西向防护可进行跨账号防护VPC，protect_vpcs指的是总体防护VPC列表
    * selfProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，self_protect_vpcs指的是本项目防护VPC列表
    * otherProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，other_protect_vpcs指的是其他项目防护VPC列表
    * totalAssets  租户的所有VPC资产数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'selfTotal' => 'int',
            'otherTotal' => 'int',
            'protectVpcs' => '\HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]',
            'selfProtectVpcs' => '\HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]',
            'otherProtectVpcs' => '\HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]',
            'totalAssets' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  总防护VPC数
    * selfTotal  防火墙东西向防护可进行跨账号防护VPC，self_total表示本项目防护VPC总数。
    * otherTotal  防火墙东西向防护可进行跨账号防护VPC，other_total表示其他项目防护VPC数
    * protectVpcs  防火墙东西向防护可进行跨账号防护VPC，protect_vpcs指的是总体防护VPC列表
    * selfProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，self_protect_vpcs指的是本项目防护VPC列表
    * otherProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，other_protect_vpcs指的是其他项目防护VPC列表
    * totalAssets  租户的所有VPC资产数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'selfTotal' => 'int32',
        'otherTotal' => 'int32',
        'protectVpcs' => null,
        'selfProtectVpcs' => null,
        'otherProtectVpcs' => null,
        'totalAssets' => 'int32'
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
    * total  总防护VPC数
    * selfTotal  防火墙东西向防护可进行跨账号防护VPC，self_total表示本项目防护VPC总数。
    * otherTotal  防火墙东西向防护可进行跨账号防护VPC，other_total表示其他项目防护VPC数
    * protectVpcs  防火墙东西向防护可进行跨账号防护VPC，protect_vpcs指的是总体防护VPC列表
    * selfProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，self_protect_vpcs指的是本项目防护VPC列表
    * otherProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，other_protect_vpcs指的是其他项目防护VPC列表
    * totalAssets  租户的所有VPC资产数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'selfTotal' => 'self_total',
            'otherTotal' => 'other_total',
            'protectVpcs' => 'protect_vpcs',
            'selfProtectVpcs' => 'self_protect_vpcs',
            'otherProtectVpcs' => 'other_protect_vpcs',
            'totalAssets' => 'total_assets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  总防护VPC数
    * selfTotal  防火墙东西向防护可进行跨账号防护VPC，self_total表示本项目防护VPC总数。
    * otherTotal  防火墙东西向防护可进行跨账号防护VPC，other_total表示其他项目防护VPC数
    * protectVpcs  防火墙东西向防护可进行跨账号防护VPC，protect_vpcs指的是总体防护VPC列表
    * selfProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，self_protect_vpcs指的是本项目防护VPC列表
    * otherProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，other_protect_vpcs指的是其他项目防护VPC列表
    * totalAssets  租户的所有VPC资产数量
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'selfTotal' => 'setSelfTotal',
            'otherTotal' => 'setOtherTotal',
            'protectVpcs' => 'setProtectVpcs',
            'selfProtectVpcs' => 'setSelfProtectVpcs',
            'otherProtectVpcs' => 'setOtherProtectVpcs',
            'totalAssets' => 'setTotalAssets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  总防护VPC数
    * selfTotal  防火墙东西向防护可进行跨账号防护VPC，self_total表示本项目防护VPC总数。
    * otherTotal  防火墙东西向防护可进行跨账号防护VPC，other_total表示其他项目防护VPC数
    * protectVpcs  防火墙东西向防护可进行跨账号防护VPC，protect_vpcs指的是总体防护VPC列表
    * selfProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，self_protect_vpcs指的是本项目防护VPC列表
    * otherProtectVpcs  防火墙东西向防护可进行跨账号防护VPC，other_protect_vpcs指的是其他项目防护VPC列表
    * totalAssets  租户的所有VPC资产数量
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'selfTotal' => 'getSelfTotal',
            'otherTotal' => 'getOtherTotal',
            'protectVpcs' => 'getProtectVpcs',
            'selfProtectVpcs' => 'getSelfProtectVpcs',
            'otherProtectVpcs' => 'getOtherProtectVpcs',
            'totalAssets' => 'getTotalAssets'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['selfTotal'] = isset($data['selfTotal']) ? $data['selfTotal'] : null;
        $this->container['otherTotal'] = isset($data['otherTotal']) ? $data['otherTotal'] : null;
        $this->container['protectVpcs'] = isset($data['protectVpcs']) ? $data['protectVpcs'] : null;
        $this->container['selfProtectVpcs'] = isset($data['selfProtectVpcs']) ? $data['selfProtectVpcs'] : null;
        $this->container['otherProtectVpcs'] = isset($data['otherProtectVpcs']) ? $data['otherProtectVpcs'] : null;
        $this->container['totalAssets'] = isset($data['totalAssets']) ? $data['totalAssets'] : null;
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
    * Gets total
    *  总防护VPC数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总防护VPC数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets selfTotal
    *  防火墙东西向防护可进行跨账号防护VPC，self_total表示本项目防护VPC总数。
    *
    * @return int|null
    */
    public function getSelfTotal()
    {
        return $this->container['selfTotal'];
    }

    /**
    * Sets selfTotal
    *
    * @param int|null $selfTotal 防火墙东西向防护可进行跨账号防护VPC，self_total表示本项目防护VPC总数。
    *
    * @return $this
    */
    public function setSelfTotal($selfTotal)
    {
        $this->container['selfTotal'] = $selfTotal;
        return $this;
    }

    /**
    * Gets otherTotal
    *  防火墙东西向防护可进行跨账号防护VPC，other_total表示其他项目防护VPC数
    *
    * @return int|null
    */
    public function getOtherTotal()
    {
        return $this->container['otherTotal'];
    }

    /**
    * Sets otherTotal
    *
    * @param int|null $otherTotal 防火墙东西向防护可进行跨账号防护VPC，other_total表示其他项目防护VPC数
    *
    * @return $this
    */
    public function setOtherTotal($otherTotal)
    {
        $this->container['otherTotal'] = $otherTotal;
        return $this;
    }

    /**
    * Gets protectVpcs
    *  防火墙东西向防护可进行跨账号防护VPC，protect_vpcs指的是总体防护VPC列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]|null
    */
    public function getProtectVpcs()
    {
        return $this->container['protectVpcs'];
    }

    /**
    * Sets protectVpcs
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]|null $protectVpcs 防火墙东西向防护可进行跨账号防护VPC，protect_vpcs指的是总体防护VPC列表
    *
    * @return $this
    */
    public function setProtectVpcs($protectVpcs)
    {
        $this->container['protectVpcs'] = $protectVpcs;
        return $this;
    }

    /**
    * Gets selfProtectVpcs
    *  防火墙东西向防护可进行跨账号防护VPC，self_protect_vpcs指的是本项目防护VPC列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]|null
    */
    public function getSelfProtectVpcs()
    {
        return $this->container['selfProtectVpcs'];
    }

    /**
    * Sets selfProtectVpcs
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]|null $selfProtectVpcs 防火墙东西向防护可进行跨账号防护VPC，self_protect_vpcs指的是本项目防护VPC列表
    *
    * @return $this
    */
    public function setSelfProtectVpcs($selfProtectVpcs)
    {
        $this->container['selfProtectVpcs'] = $selfProtectVpcs;
        return $this;
    }

    /**
    * Gets otherProtectVpcs
    *  防火墙东西向防护可进行跨账号防护VPC，other_protect_vpcs指的是其他项目防护VPC列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]|null
    */
    public function getOtherProtectVpcs()
    {
        return $this->container['otherProtectVpcs'];
    }

    /**
    * Sets otherProtectVpcs
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\VpcAttachmentDetail[]|null $otherProtectVpcs 防火墙东西向防护可进行跨账号防护VPC，other_protect_vpcs指的是其他项目防护VPC列表
    *
    * @return $this
    */
    public function setOtherProtectVpcs($otherProtectVpcs)
    {
        $this->container['otherProtectVpcs'] = $otherProtectVpcs;
        return $this;
    }

    /**
    * Gets totalAssets
    *  租户的所有VPC资产数量
    *
    * @return int|null
    */
    public function getTotalAssets()
    {
        return $this->container['totalAssets'];
    }

    /**
    * Sets totalAssets
    *
    * @param int|null $totalAssets 租户的所有VPC资产数量
    *
    * @return $this
    */
    public function setTotalAssets($totalAssets)
    {
        $this->container['totalAssets'] = $totalAssets;
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

