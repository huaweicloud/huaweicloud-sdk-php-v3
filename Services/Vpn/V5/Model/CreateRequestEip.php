<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRequestEip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRequestEip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：公网IP的唯一标识
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthSize  带宽大小Mbit/s。flavor为Basic时，取值不能大于100；flavor为Professional1时，取值不能大于300；flavor为Professional2时，取值不能大于1000
    * bandwidthName  带宽名称
    * bandwidthId  功能说明：带宽ID，创建弹性IP弹性公网IP时可以指定已有的共享带宽  取值范围：共享（WHOLE类型）带宽ID  约束：指定带宽ID时，带宽的其他字段会被忽略；不指定ID时，size/name/charge_mode/share_type必选，用于创建绑定公网IP的独享带宽
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'chargeMode' => 'string',
            'bandwidthSize' => 'int',
            'bandwidthName' => 'string',
            'bandwidthId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：公网IP的唯一标识
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthSize  带宽大小Mbit/s。flavor为Basic时，取值不能大于100；flavor为Professional1时，取值不能大于300；flavor为Professional2时，取值不能大于1000
    * bandwidthName  带宽名称
    * bandwidthId  功能说明：带宽ID，创建弹性IP弹性公网IP时可以指定已有的共享带宽  取值范围：共享（WHOLE类型）带宽ID  约束：指定带宽ID时，带宽的其他字段会被忽略；不指定ID时，size/name/charge_mode/share_type必选，用于创建绑定公网IP的独享带宽
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'chargeMode' => null,
        'bandwidthSize' => 'int32',
        'bandwidthName' => null,
        'bandwidthId' => null
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
    * id  功能说明：公网IP的唯一标识
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthSize  带宽大小Mbit/s。flavor为Basic时，取值不能大于100；flavor为Professional1时，取值不能大于300；flavor为Professional2时，取值不能大于1000
    * bandwidthName  带宽名称
    * bandwidthId  功能说明：带宽ID，创建弹性IP弹性公网IP时可以指定已有的共享带宽  取值范围：共享（WHOLE类型）带宽ID  约束：指定带宽ID时，带宽的其他字段会被忽略；不指定ID时，size/name/charge_mode/share_type必选，用于创建绑定公网IP的独享带宽
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'chargeMode' => 'charge_mode',
            'bandwidthSize' => 'bandwidth_size',
            'bandwidthName' => 'bandwidth_name',
            'bandwidthId' => 'bandwidth_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：公网IP的唯一标识
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthSize  带宽大小Mbit/s。flavor为Basic时，取值不能大于100；flavor为Professional1时，取值不能大于300；flavor为Professional2时，取值不能大于1000
    * bandwidthName  带宽名称
    * bandwidthId  功能说明：带宽ID，创建弹性IP弹性公网IP时可以指定已有的共享带宽  取值范围：共享（WHOLE类型）带宽ID  约束：指定带宽ID时，带宽的其他字段会被忽略；不指定ID时，size/name/charge_mode/share_type必选，用于创建绑定公网IP的独享带宽
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'chargeMode' => 'setChargeMode',
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthName' => 'setBandwidthName',
            'bandwidthId' => 'setBandwidthId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：公网IP的唯一标识
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthSize  带宽大小Mbit/s。flavor为Basic时，取值不能大于100；flavor为Professional1时，取值不能大于300；flavor为Professional2时，取值不能大于1000
    * bandwidthName  带宽名称
    * bandwidthId  功能说明：带宽ID，创建弹性IP弹性公网IP时可以指定已有的共享带宽  取值范围：共享（WHOLE类型）带宽ID  约束：指定带宽ID时，带宽的其他字段会被忽略；不指定ID时，size/name/charge_mode/share_type必选，用于创建绑定公网IP的独享带宽
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'chargeMode' => 'getChargeMode',
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthName' => 'getBandwidthName',
            'bandwidthId' => 'getBandwidthId'
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
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE_TRAFFIC = 'traffic';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
            self::CHARGE_MODE_TRAFFIC,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthName'] = isset($data['bandwidthName']) ? $data['bandwidthName'] : null;
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bandwidthName']) && !preg_match("/[一-龥A-Za-z0-9_.-]+/", $this->container['bandwidthName'])) {
                $invalidProperties[] = "invalid value for 'bandwidthName', must be conform to the pattern /[一-龥A-Za-z0-9_.-]+/.";
            }
            if (!is_null($this->container['bandwidthId']) && (mb_strlen($this->container['bandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthId']) && (mb_strlen($this->container['bandwidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthId']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['bandwidthId'])) {
                $invalidProperties[] = "invalid value for 'bandwidthId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
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
    * Gets id
    *  功能说明：公网IP的唯一标识
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 功能说明：公网IP的唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets chargeMode
    *  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽大小Mbit/s。flavor为Basic时，取值不能大于100；flavor为Professional1时，取值不能大于300；flavor为Professional2时，取值不能大于1000
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 带宽大小Mbit/s。flavor为Basic时，取值不能大于100；flavor为Professional1时，取值不能大于300；flavor为Professional2时，取值不能大于1000
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthName
    *  带宽名称
    *
    * @return string|null
    */
    public function getBandwidthName()
    {
        return $this->container['bandwidthName'];
    }

    /**
    * Sets bandwidthName
    *
    * @param string|null $bandwidthName 带宽名称
    *
    * @return $this
    */
    public function setBandwidthName($bandwidthName)
    {
        $this->container['bandwidthName'] = $bandwidthName;
        return $this;
    }

    /**
    * Gets bandwidthId
    *  功能说明：带宽ID，创建弹性IP弹性公网IP时可以指定已有的共享带宽  取值范围：共享（WHOLE类型）带宽ID  约束：指定带宽ID时，带宽的其他字段会被忽略；不指定ID时，size/name/charge_mode/share_type必选，用于创建绑定公网IP的独享带宽
    *
    * @return string|null
    */
    public function getBandwidthId()
    {
        return $this->container['bandwidthId'];
    }

    /**
    * Sets bandwidthId
    *
    * @param string|null $bandwidthId 功能说明：带宽ID，创建弹性IP弹性公网IP时可以指定已有的共享带宽  取值范围：共享（WHOLE类型）带宽ID  约束：指定带宽ID时，带宽的其他字段会被忽略；不指定ID时，size/name/charge_mode/share_type必选，用于创建绑定公网IP的独享带宽
    *
    * @return $this
    */
    public function setBandwidthId($bandwidthId)
    {
        $this->container['bandwidthId'] = $bandwidthId;
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

