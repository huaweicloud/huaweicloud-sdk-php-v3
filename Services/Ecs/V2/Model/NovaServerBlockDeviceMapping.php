<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaServerBlockDeviceMapping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaServerBlockDeviceMapping';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceType  卷设备的源头类型，当前只支持volume、image、snapshot、blank类型。  当使用卷创建云服务器时，source_type设置为volume；当使用镜像创建云服务器时，source_type设置为image；当使用快照创建云服务器时，source_type设置为snapshot；当创建空数据卷时，source_type设置为blank。  - 说明： -  - 当卷设备的源头类型为snapshot时，且boot_index为0，则该快照对应的云硬盘必须为系统盘。
    * destinationType  卷设备的目标类型，当前仅支持volume类型。  - volume：卷。 - local：本地文件，当前不支持该类型。
    * guestFormat  local文件系统格式，例如：swap, ext4。  当前不支持该功能。
    * deviceName  卷设备名称。  > 说明： >  > 该字段已经废弃。 >  > 用户指定的device_name不会生效，系统会默认生成一个device_name。
    * deleteOnTermination  删除弹性云服务器时，是否删除卷，默认值false。  true：删除弹性云服务器时，删除卷  false：删除弹性云服务器时，不删除卷
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘。  > 说明： >  > 当卷设备的源头类型全为volume时，boot_index的值有一个为0。
    * uuid  当source_type值是volume时，uuid为卷的uuid；  当source_type值是snapshot时，uuid为快照的uuid；  当source_type值是image时，uuid为镜像的uuid；
    * volumeSize  卷大小，整数，在source_type是image或blank，destination_type是volume的时候必选。  单位为GB。
    * volumeType  卷类型，在source_type是image，destination_type是volume时建议填写。  卷类型取值范围请参考 EVS 服务 [磁盘类型介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceType' => 'string',
            'destinationType' => 'string',
            'guestFormat' => 'string',
            'deviceName' => 'string',
            'deleteOnTermination' => 'bool',
            'bootIndex' => 'string',
            'uuid' => 'string',
            'volumeSize' => 'int',
            'volumeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceType  卷设备的源头类型，当前只支持volume、image、snapshot、blank类型。  当使用卷创建云服务器时，source_type设置为volume；当使用镜像创建云服务器时，source_type设置为image；当使用快照创建云服务器时，source_type设置为snapshot；当创建空数据卷时，source_type设置为blank。  - 说明： -  - 当卷设备的源头类型为snapshot时，且boot_index为0，则该快照对应的云硬盘必须为系统盘。
    * destinationType  卷设备的目标类型，当前仅支持volume类型。  - volume：卷。 - local：本地文件，当前不支持该类型。
    * guestFormat  local文件系统格式，例如：swap, ext4。  当前不支持该功能。
    * deviceName  卷设备名称。  > 说明： >  > 该字段已经废弃。 >  > 用户指定的device_name不会生效，系统会默认生成一个device_name。
    * deleteOnTermination  删除弹性云服务器时，是否删除卷，默认值false。  true：删除弹性云服务器时，删除卷  false：删除弹性云服务器时，不删除卷
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘。  > 说明： >  > 当卷设备的源头类型全为volume时，boot_index的值有一个为0。
    * uuid  当source_type值是volume时，uuid为卷的uuid；  当source_type值是snapshot时，uuid为快照的uuid；  当source_type值是image时，uuid为镜像的uuid；
    * volumeSize  卷大小，整数，在source_type是image或blank，destination_type是volume的时候必选。  单位为GB。
    * volumeType  卷类型，在source_type是image，destination_type是volume时建议填写。  卷类型取值范围请参考 EVS 服务 [磁盘类型介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceType' => null,
        'destinationType' => null,
        'guestFormat' => null,
        'deviceName' => null,
        'deleteOnTermination' => null,
        'bootIndex' => null,
        'uuid' => null,
        'volumeSize' => 'int32',
        'volumeType' => null
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
    * sourceType  卷设备的源头类型，当前只支持volume、image、snapshot、blank类型。  当使用卷创建云服务器时，source_type设置为volume；当使用镜像创建云服务器时，source_type设置为image；当使用快照创建云服务器时，source_type设置为snapshot；当创建空数据卷时，source_type设置为blank。  - 说明： -  - 当卷设备的源头类型为snapshot时，且boot_index为0，则该快照对应的云硬盘必须为系统盘。
    * destinationType  卷设备的目标类型，当前仅支持volume类型。  - volume：卷。 - local：本地文件，当前不支持该类型。
    * guestFormat  local文件系统格式，例如：swap, ext4。  当前不支持该功能。
    * deviceName  卷设备名称。  > 说明： >  > 该字段已经废弃。 >  > 用户指定的device_name不会生效，系统会默认生成一个device_name。
    * deleteOnTermination  删除弹性云服务器时，是否删除卷，默认值false。  true：删除弹性云服务器时，删除卷  false：删除弹性云服务器时，不删除卷
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘。  > 说明： >  > 当卷设备的源头类型全为volume时，boot_index的值有一个为0。
    * uuid  当source_type值是volume时，uuid为卷的uuid；  当source_type值是snapshot时，uuid为快照的uuid；  当source_type值是image时，uuid为镜像的uuid；
    * volumeSize  卷大小，整数，在source_type是image或blank，destination_type是volume的时候必选。  单位为GB。
    * volumeType  卷类型，在source_type是image，destination_type是volume时建议填写。  卷类型取值范围请参考 EVS 服务 [磁盘类型介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceType' => 'source_type',
            'destinationType' => 'destination_type',
            'guestFormat' => 'guest_format',
            'deviceName' => 'device_name',
            'deleteOnTermination' => 'delete_on_termination',
            'bootIndex' => 'boot_index',
            'uuid' => 'uuid',
            'volumeSize' => 'volume_size',
            'volumeType' => 'volume_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceType  卷设备的源头类型，当前只支持volume、image、snapshot、blank类型。  当使用卷创建云服务器时，source_type设置为volume；当使用镜像创建云服务器时，source_type设置为image；当使用快照创建云服务器时，source_type设置为snapshot；当创建空数据卷时，source_type设置为blank。  - 说明： -  - 当卷设备的源头类型为snapshot时，且boot_index为0，则该快照对应的云硬盘必须为系统盘。
    * destinationType  卷设备的目标类型，当前仅支持volume类型。  - volume：卷。 - local：本地文件，当前不支持该类型。
    * guestFormat  local文件系统格式，例如：swap, ext4。  当前不支持该功能。
    * deviceName  卷设备名称。  > 说明： >  > 该字段已经废弃。 >  > 用户指定的device_name不会生效，系统会默认生成一个device_name。
    * deleteOnTermination  删除弹性云服务器时，是否删除卷，默认值false。  true：删除弹性云服务器时，删除卷  false：删除弹性云服务器时，不删除卷
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘。  > 说明： >  > 当卷设备的源头类型全为volume时，boot_index的值有一个为0。
    * uuid  当source_type值是volume时，uuid为卷的uuid；  当source_type值是snapshot时，uuid为快照的uuid；  当source_type值是image时，uuid为镜像的uuid；
    * volumeSize  卷大小，整数，在source_type是image或blank，destination_type是volume的时候必选。  单位为GB。
    * volumeType  卷类型，在source_type是image，destination_type是volume时建议填写。  卷类型取值范围请参考 EVS 服务 [磁盘类型介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceType' => 'setSourceType',
            'destinationType' => 'setDestinationType',
            'guestFormat' => 'setGuestFormat',
            'deviceName' => 'setDeviceName',
            'deleteOnTermination' => 'setDeleteOnTermination',
            'bootIndex' => 'setBootIndex',
            'uuid' => 'setUuid',
            'volumeSize' => 'setVolumeSize',
            'volumeType' => 'setVolumeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceType  卷设备的源头类型，当前只支持volume、image、snapshot、blank类型。  当使用卷创建云服务器时，source_type设置为volume；当使用镜像创建云服务器时，source_type设置为image；当使用快照创建云服务器时，source_type设置为snapshot；当创建空数据卷时，source_type设置为blank。  - 说明： -  - 当卷设备的源头类型为snapshot时，且boot_index为0，则该快照对应的云硬盘必须为系统盘。
    * destinationType  卷设备的目标类型，当前仅支持volume类型。  - volume：卷。 - local：本地文件，当前不支持该类型。
    * guestFormat  local文件系统格式，例如：swap, ext4。  当前不支持该功能。
    * deviceName  卷设备名称。  > 说明： >  > 该字段已经废弃。 >  > 用户指定的device_name不会生效，系统会默认生成一个device_name。
    * deleteOnTermination  删除弹性云服务器时，是否删除卷，默认值false。  true：删除弹性云服务器时，删除卷  false：删除弹性云服务器时，不删除卷
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘。  > 说明： >  > 当卷设备的源头类型全为volume时，boot_index的值有一个为0。
    * uuid  当source_type值是volume时，uuid为卷的uuid；  当source_type值是snapshot时，uuid为快照的uuid；  当source_type值是image时，uuid为镜像的uuid；
    * volumeSize  卷大小，整数，在source_type是image或blank，destination_type是volume的时候必选。  单位为GB。
    * volumeType  卷类型，在source_type是image，destination_type是volume时建议填写。  卷类型取值范围请参考 EVS 服务 [磁盘类型介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceType' => 'getSourceType',
            'destinationType' => 'getDestinationType',
            'guestFormat' => 'getGuestFormat',
            'deviceName' => 'getDeviceName',
            'deleteOnTermination' => 'getDeleteOnTermination',
            'bootIndex' => 'getBootIndex',
            'uuid' => 'getUuid',
            'volumeSize' => 'getVolumeSize',
            'volumeType' => 'getVolumeType'
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
    const SOURCE_TYPE_BLANK = 'blank';
    const SOURCE_TYPE_SNAPSHOT = 'snapshot';
    const SOURCE_TYPE_VOLUME = 'volume';
    const SOURCE_TYPE_IMAGE = 'image';
    const DESTINATION_TYPE_VOLUME = 'volume';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_BLANK,
            self::SOURCE_TYPE_SNAPSHOT,
            self::SOURCE_TYPE_VOLUME,
            self::SOURCE_TYPE_IMAGE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDestinationTypeAllowableValues()
    {
        return [
            self::DESTINATION_TYPE_VOLUME,
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
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['destinationType'] = isset($data['destinationType']) ? $data['destinationType'] : null;
        $this->container['guestFormat'] = isset($data['guestFormat']) ? $data['guestFormat'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['deleteOnTermination'] = isset($data['deleteOnTermination']) ? $data['deleteOnTermination'] : false;
        $this->container['bootIndex'] = isset($data['bootIndex']) ? $data['bootIndex'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDestinationTypeAllowableValues();
                if (!is_null($this->container['destinationType']) && !in_array($this->container['destinationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'destinationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets sourceType
    *  卷设备的源头类型，当前只支持volume、image、snapshot、blank类型。  当使用卷创建云服务器时，source_type设置为volume；当使用镜像创建云服务器时，source_type设置为image；当使用快照创建云服务器时，source_type设置为snapshot；当创建空数据卷时，source_type设置为blank。  - 说明： -  - 当卷设备的源头类型为snapshot时，且boot_index为0，则该快照对应的云硬盘必须为系统盘。
    *
    * @return string
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string $sourceType 卷设备的源头类型，当前只支持volume、image、snapshot、blank类型。  当使用卷创建云服务器时，source_type设置为volume；当使用镜像创建云服务器时，source_type设置为image；当使用快照创建云服务器时，source_type设置为snapshot；当创建空数据卷时，source_type设置为blank。  - 说明： -  - 当卷设备的源头类型为snapshot时，且boot_index为0，则该快照对应的云硬盘必须为系统盘。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets destinationType
    *  卷设备的目标类型，当前仅支持volume类型。  - volume：卷。 - local：本地文件，当前不支持该类型。
    *
    * @return string|null
    */
    public function getDestinationType()
    {
        return $this->container['destinationType'];
    }

    /**
    * Sets destinationType
    *
    * @param string|null $destinationType 卷设备的目标类型，当前仅支持volume类型。  - volume：卷。 - local：本地文件，当前不支持该类型。
    *
    * @return $this
    */
    public function setDestinationType($destinationType)
    {
        $this->container['destinationType'] = $destinationType;
        return $this;
    }

    /**
    * Gets guestFormat
    *  local文件系统格式，例如：swap, ext4。  当前不支持该功能。
    *
    * @return string|null
    */
    public function getGuestFormat()
    {
        return $this->container['guestFormat'];
    }

    /**
    * Sets guestFormat
    *
    * @param string|null $guestFormat local文件系统格式，例如：swap, ext4。  当前不支持该功能。
    *
    * @return $this
    */
    public function setGuestFormat($guestFormat)
    {
        $this->container['guestFormat'] = $guestFormat;
        return $this;
    }

    /**
    * Gets deviceName
    *  卷设备名称。  > 说明： >  > 该字段已经废弃。 >  > 用户指定的device_name不会生效，系统会默认生成一个device_name。
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName 卷设备名称。  > 说明： >  > 该字段已经废弃。 >  > 用户指定的device_name不会生效，系统会默认生成一个device_name。
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets deleteOnTermination
    *  删除弹性云服务器时，是否删除卷，默认值false。  true：删除弹性云服务器时，删除卷  false：删除弹性云服务器时，不删除卷
    *
    * @return bool|null
    */
    public function getDeleteOnTermination()
    {
        return $this->container['deleteOnTermination'];
    }

    /**
    * Sets deleteOnTermination
    *
    * @param bool|null $deleteOnTermination 删除弹性云服务器时，是否删除卷，默认值false。  true：删除弹性云服务器时，删除卷  false：删除弹性云服务器时，不删除卷
    *
    * @return $this
    */
    public function setDeleteOnTermination($deleteOnTermination)
    {
        $this->container['deleteOnTermination'] = $deleteOnTermination;
        return $this;
    }

    /**
    * Gets bootIndex
    *  启动标识，“0”代表启动盘，“-1“代表非启动盘。  > 说明： >  > 当卷设备的源头类型全为volume时，boot_index的值有一个为0。
    *
    * @return string|null
    */
    public function getBootIndex()
    {
        return $this->container['bootIndex'];
    }

    /**
    * Sets bootIndex
    *
    * @param string|null $bootIndex 启动标识，“0”代表启动盘，“-1“代表非启动盘。  > 说明： >  > 当卷设备的源头类型全为volume时，boot_index的值有一个为0。
    *
    * @return $this
    */
    public function setBootIndex($bootIndex)
    {
        $this->container['bootIndex'] = $bootIndex;
        return $this;
    }

    /**
    * Gets uuid
    *  当source_type值是volume时，uuid为卷的uuid；  当source_type值是snapshot时，uuid为快照的uuid；  当source_type值是image时，uuid为镜像的uuid；
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 当source_type值是volume时，uuid为卷的uuid；  当source_type值是snapshot时，uuid为快照的uuid；  当source_type值是image时，uuid为镜像的uuid；
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets volumeSize
    *  卷大小，整数，在source_type是image或blank，destination_type是volume的时候必选。  单位为GB。
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 卷大小，整数，在source_type是image或blank，destination_type是volume的时候必选。  单位为GB。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets volumeType
    *  卷类型，在source_type是image，destination_type是volume时建议填写。  卷类型取值范围请参考 EVS 服务 [磁盘类型介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 卷类型，在source_type是image，destination_type是volume时建议填写。  卷类型取值范围请参考 EVS 服务 [磁盘类型介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
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

