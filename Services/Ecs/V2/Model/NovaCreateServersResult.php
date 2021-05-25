<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaCreateServersResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaCreateServersResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性云服务器uuid。
    * links  弹性云服务器URI自描述信息。
    * securityGroups  弹性云服务器所在安全组。
    * osDcFdiskConfig  diskConfig方式。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    * reservationId  通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    * adminPass  Windows弹性云服务器Administrator用户的密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]',
            'securityGroups' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[]',
            'osDcFdiskConfig' => 'string',
            'reservationId' => 'string',
            'adminPass' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性云服务器uuid。
    * links  弹性云服务器URI自描述信息。
    * securityGroups  弹性云服务器所在安全组。
    * osDcFdiskConfig  diskConfig方式。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    * reservationId  通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    * adminPass  Windows弹性云服务器Administrator用户的密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'securityGroups' => null,
        'osDcFdiskConfig' => null,
        'reservationId' => null,
        'adminPass' => null
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
    * id  弹性云服务器uuid。
    * links  弹性云服务器URI自描述信息。
    * securityGroups  弹性云服务器所在安全组。
    * osDcFdiskConfig  diskConfig方式。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    * reservationId  通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    * adminPass  Windows弹性云服务器Administrator用户的密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'securityGroups' => 'security_groups',
            'osDcFdiskConfig' => 'OS-DCF:diskConfig',
            'reservationId' => 'reservation_id',
            'adminPass' => 'adminPass'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性云服务器uuid。
    * links  弹性云服务器URI自描述信息。
    * securityGroups  弹性云服务器所在安全组。
    * osDcFdiskConfig  diskConfig方式。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    * reservationId  通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    * adminPass  Windows弹性云服务器Administrator用户的密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'securityGroups' => 'setSecurityGroups',
            'osDcFdiskConfig' => 'setOsDcFdiskConfig',
            'reservationId' => 'setReservationId',
            'adminPass' => 'setAdminPass'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性云服务器uuid。
    * links  弹性云服务器URI自描述信息。
    * securityGroups  弹性云服务器所在安全组。
    * osDcFdiskConfig  diskConfig方式。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    * reservationId  通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    * adminPass  Windows弹性云服务器Administrator用户的密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'securityGroups' => 'getSecurityGroups',
            'osDcFdiskConfig' => 'getOsDcFdiskConfig',
            'reservationId' => 'getReservationId',
            'adminPass' => 'getAdminPass'
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
    const OS_DC_FDISK_CONFIG_MANUAL = 'MANUAL';
    const OS_DC_FDISK_CONFIG_AUTO = 'AUTO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsDcFdiskConfigAllowableValues()
    {
        return [
            self::OS_DC_FDISK_CONFIG_MANUAL,
            self::OS_DC_FDISK_CONFIG_AUTO,
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['osDcFdiskConfig'] = isset($data['osDcFdiskConfig']) ? $data['osDcFdiskConfig'] : null;
        $this->container['reservationId'] = isset($data['reservationId']) ? $data['reservationId'] : null;
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['osDcFdiskConfig'] === null) {
            $invalidProperties[] = "'osDcFdiskConfig' can't be null";
        }
            $allowedValues = $this->getOsDcFdiskConfigAllowableValues();
                if (!is_null($this->container['osDcFdiskConfig']) && !in_array($this->container['osDcFdiskConfig'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osDcFdiskConfig', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['adminPass'] === null) {
            $invalidProperties[] = "'adminPass' can't be null";
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
    *  弹性云服务器uuid。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 弹性云服务器uuid。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *  弹性云服务器URI自描述信息。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[] $links 弹性云服务器URI自描述信息。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets securityGroups
    *  弹性云服务器所在安全组。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[] $securityGroups 弹性云服务器所在安全组。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets osDcFdiskConfig
    *  diskConfig方式。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    *
    * @return string
    */
    public function getOsDcFdiskConfig()
    {
        return $this->container['osDcFdiskConfig'];
    }

    /**
    * Sets osDcFdiskConfig
    *
    * @param string $osDcFdiskConfig diskConfig方式。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    *
    * @return $this
    */
    public function setOsDcFdiskConfig($osDcFdiskConfig)
    {
        $this->container['osDcFdiskConfig'] = $osDcFdiskConfig;
        return $this;
    }

    /**
    * Gets reservationId
    *  通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    *
    * @return string|null
    */
    public function getReservationId()
    {
        return $this->container['reservationId'];
    }

    /**
    * Sets reservationId
    *
    * @param string|null $reservationId 通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    *
    * @return $this
    */
    public function setReservationId($reservationId)
    {
        $this->container['reservationId'] = $reservationId;
        return $this;
    }

    /**
    * Gets adminPass
    *  Windows弹性云服务器Administrator用户的密码。
    *
    * @return string
    */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
    * Sets adminPass
    *
    * @param string $adminPass Windows弹性云服务器Administrator用户的密码。
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
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

