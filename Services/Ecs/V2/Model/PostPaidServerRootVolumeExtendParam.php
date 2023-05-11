<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostPaidServerRootVolumeExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostPaidServerRootVolumeExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * resourceSpecCode  磁盘产品资源规格编码，如SATA，SAS和SSD。  > 说明： >  > 废弃字段。
    * resourceType  磁盘产品资源类型。  > 说明： >  > 废弃字段。
    * snapshotId  整机镜像中自带的原始数据盘（简称“原数据盘”）所对应的快照ID或原始数据盘ID。  使用场景：  使用整机镜像创建云服务器，并且选择的整机镜像自带1个或者多个数据盘。  用途：  使用整机镜像创建云服务器时，系统会自动恢复整机镜像中自带数据盘（如果有）的数据，但是磁盘类型将被恢复为默认属性：普通I/O、VBD、非共享盘。此时，您可以通过snapshotID，修改指定原数据盘恢复后的磁盘类型。  > 说明： >  > - 建议对每块原数据盘都指定snapshotID，否则，未指定的原数据盘将按默认属性进行创建。 > - 如需修改磁盘大小，修改后的磁盘大小需大于等于原数据盘大小。否则，会影响原数据盘的数据恢复。  实现原理：  snapshotId是整机镜像自带原始数据盘的唯一标识，通过snapshotId可以获取原数据盘的磁盘信息，从而恢复数据盘数据。  快照ID的获取方法：  登录管理控制台，打开\"云硬盘 > 快照\"页面，根据原始数据盘的磁盘名称找到对应的快照ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'systemEncrypted' => 'string',
            'systemCmkid' => 'string',
            'resourceSpecCode' => 'string',
            'resourceType' => 'string',
            'snapshotId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * resourceSpecCode  磁盘产品资源规格编码，如SATA，SAS和SSD。  > 说明： >  > 废弃字段。
    * resourceType  磁盘产品资源类型。  > 说明： >  > 废弃字段。
    * snapshotId  整机镜像中自带的原始数据盘（简称“原数据盘”）所对应的快照ID或原始数据盘ID。  使用场景：  使用整机镜像创建云服务器，并且选择的整机镜像自带1个或者多个数据盘。  用途：  使用整机镜像创建云服务器时，系统会自动恢复整机镜像中自带数据盘（如果有）的数据，但是磁盘类型将被恢复为默认属性：普通I/O、VBD、非共享盘。此时，您可以通过snapshotID，修改指定原数据盘恢复后的磁盘类型。  > 说明： >  > - 建议对每块原数据盘都指定snapshotID，否则，未指定的原数据盘将按默认属性进行创建。 > - 如需修改磁盘大小，修改后的磁盘大小需大于等于原数据盘大小。否则，会影响原数据盘的数据恢复。  实现原理：  snapshotId是整机镜像自带原始数据盘的唯一标识，通过snapshotId可以获取原数据盘的磁盘信息，从而恢复数据盘数据。  快照ID的获取方法：  登录管理控制台，打开\"云硬盘 > 快照\"页面，根据原始数据盘的磁盘名称找到对应的快照ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'systemEncrypted' => null,
        'systemCmkid' => null,
        'resourceSpecCode' => null,
        'resourceType' => null,
        'snapshotId' => null
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
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * resourceSpecCode  磁盘产品资源规格编码，如SATA，SAS和SSD。  > 说明： >  > 废弃字段。
    * resourceType  磁盘产品资源类型。  > 说明： >  > 废弃字段。
    * snapshotId  整机镜像中自带的原始数据盘（简称“原数据盘”）所对应的快照ID或原始数据盘ID。  使用场景：  使用整机镜像创建云服务器，并且选择的整机镜像自带1个或者多个数据盘。  用途：  使用整机镜像创建云服务器时，系统会自动恢复整机镜像中自带数据盘（如果有）的数据，但是磁盘类型将被恢复为默认属性：普通I/O、VBD、非共享盘。此时，您可以通过snapshotID，修改指定原数据盘恢复后的磁盘类型。  > 说明： >  > - 建议对每块原数据盘都指定snapshotID，否则，未指定的原数据盘将按默认属性进行创建。 > - 如需修改磁盘大小，修改后的磁盘大小需大于等于原数据盘大小。否则，会影响原数据盘的数据恢复。  实现原理：  snapshotId是整机镜像自带原始数据盘的唯一标识，通过snapshotId可以获取原数据盘的磁盘信息，从而恢复数据盘数据。  快照ID的获取方法：  登录管理控制台，打开\"云硬盘 > 快照\"页面，根据原始数据盘的磁盘名称找到对应的快照ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'systemEncrypted' => '__system__encrypted',
            'systemCmkid' => '__system__cmkid',
            'resourceSpecCode' => 'resourceSpecCode',
            'resourceType' => 'resourceType',
            'snapshotId' => 'snapshotId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * resourceSpecCode  磁盘产品资源规格编码，如SATA，SAS和SSD。  > 说明： >  > 废弃字段。
    * resourceType  磁盘产品资源类型。  > 说明： >  > 废弃字段。
    * snapshotId  整机镜像中自带的原始数据盘（简称“原数据盘”）所对应的快照ID或原始数据盘ID。  使用场景：  使用整机镜像创建云服务器，并且选择的整机镜像自带1个或者多个数据盘。  用途：  使用整机镜像创建云服务器时，系统会自动恢复整机镜像中自带数据盘（如果有）的数据，但是磁盘类型将被恢复为默认属性：普通I/O、VBD、非共享盘。此时，您可以通过snapshotID，修改指定原数据盘恢复后的磁盘类型。  > 说明： >  > - 建议对每块原数据盘都指定snapshotID，否则，未指定的原数据盘将按默认属性进行创建。 > - 如需修改磁盘大小，修改后的磁盘大小需大于等于原数据盘大小。否则，会影响原数据盘的数据恢复。  实现原理：  snapshotId是整机镜像自带原始数据盘的唯一标识，通过snapshotId可以获取原数据盘的磁盘信息，从而恢复数据盘数据。  快照ID的获取方法：  登录管理控制台，打开\"云硬盘 > 快照\"页面，根据原始数据盘的磁盘名称找到对应的快照ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'systemEncrypted' => 'setSystemEncrypted',
            'systemCmkid' => 'setSystemCmkid',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceType' => 'setResourceType',
            'snapshotId' => 'setSnapshotId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * resourceSpecCode  磁盘产品资源规格编码，如SATA，SAS和SSD。  > 说明： >  > 废弃字段。
    * resourceType  磁盘产品资源类型。  > 说明： >  > 废弃字段。
    * snapshotId  整机镜像中自带的原始数据盘（简称“原数据盘”）所对应的快照ID或原始数据盘ID。  使用场景：  使用整机镜像创建云服务器，并且选择的整机镜像自带1个或者多个数据盘。  用途：  使用整机镜像创建云服务器时，系统会自动恢复整机镜像中自带数据盘（如果有）的数据，但是磁盘类型将被恢复为默认属性：普通I/O、VBD、非共享盘。此时，您可以通过snapshotID，修改指定原数据盘恢复后的磁盘类型。  > 说明： >  > - 建议对每块原数据盘都指定snapshotID，否则，未指定的原数据盘将按默认属性进行创建。 > - 如需修改磁盘大小，修改后的磁盘大小需大于等于原数据盘大小。否则，会影响原数据盘的数据恢复。  实现原理：  snapshotId是整机镜像自带原始数据盘的唯一标识，通过snapshotId可以获取原数据盘的磁盘信息，从而恢复数据盘数据。  快照ID的获取方法：  登录管理控制台，打开\"云硬盘 > 快照\"页面，根据原始数据盘的磁盘名称找到对应的快照ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'systemEncrypted' => 'getSystemEncrypted',
            'systemCmkid' => 'getSystemCmkid',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceType' => 'getResourceType',
            'snapshotId' => 'getSnapshotId'
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
        $this->container['systemEncrypted'] = isset($data['systemEncrypted']) ? $data['systemEncrypted'] : '0';
        $this->container['systemCmkid'] = isset($data['systemCmkid']) ? $data['systemCmkid'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
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
    * Gets systemEncrypted
    *  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    *
    * @return string|null
    */
    public function getSystemEncrypted()
    {
        return $this->container['systemEncrypted'];
    }

    /**
    * Sets systemEncrypted
    *
    * @param string|null $systemEncrypted metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    *
    * @return $this
    */
    public function setSystemEncrypted($systemEncrypted)
    {
        $this->container['systemEncrypted'] = $systemEncrypted;
        return $this;
    }

    /**
    * Gets systemCmkid
    *  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    *
    * @return string|null
    */
    public function getSystemCmkid()
    {
        return $this->container['systemCmkid'];
    }

    /**
    * Sets systemCmkid
    *
    * @param string|null $systemCmkid metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    *
    * @return $this
    */
    public function setSystemCmkid($systemCmkid)
    {
        $this->container['systemCmkid'] = $systemCmkid;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  磁盘产品资源规格编码，如SATA，SAS和SSD。  > 说明： >  > 废弃字段。
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 磁盘产品资源规格编码，如SATA，SAS和SSD。  > 说明： >  > 废弃字段。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceType
    *  磁盘产品资源类型。  > 说明： >  > 废弃字段。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 磁盘产品资源类型。  > 说明： >  > 废弃字段。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets snapshotId
    *  整机镜像中自带的原始数据盘（简称“原数据盘”）所对应的快照ID或原始数据盘ID。  使用场景：  使用整机镜像创建云服务器，并且选择的整机镜像自带1个或者多个数据盘。  用途：  使用整机镜像创建云服务器时，系统会自动恢复整机镜像中自带数据盘（如果有）的数据，但是磁盘类型将被恢复为默认属性：普通I/O、VBD、非共享盘。此时，您可以通过snapshotID，修改指定原数据盘恢复后的磁盘类型。  > 说明： >  > - 建议对每块原数据盘都指定snapshotID，否则，未指定的原数据盘将按默认属性进行创建。 > - 如需修改磁盘大小，修改后的磁盘大小需大于等于原数据盘大小。否则，会影响原数据盘的数据恢复。  实现原理：  snapshotId是整机镜像自带原始数据盘的唯一标识，通过snapshotId可以获取原数据盘的磁盘信息，从而恢复数据盘数据。  快照ID的获取方法：  登录管理控制台，打开\"云硬盘 > 快照\"页面，根据原始数据盘的磁盘名称找到对应的快照ID。
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId 整机镜像中自带的原始数据盘（简称“原数据盘”）所对应的快照ID或原始数据盘ID。  使用场景：  使用整机镜像创建云服务器，并且选择的整机镜像自带1个或者多个数据盘。  用途：  使用整机镜像创建云服务器时，系统会自动恢复整机镜像中自带数据盘（如果有）的数据，但是磁盘类型将被恢复为默认属性：普通I/O、VBD、非共享盘。此时，您可以通过snapshotID，修改指定原数据盘恢复后的磁盘类型。  > 说明： >  > - 建议对每块原数据盘都指定snapshotID，否则，未指定的原数据盘将按默认属性进行创建。 > - 如需修改磁盘大小，修改后的磁盘大小需大于等于原数据盘大小。否则，会影响原数据盘的数据恢复。  实现原理：  snapshotId是整机镜像自带原始数据盘的唯一标识，通过snapshotId可以获取原数据盘的磁盘信息，从而恢复数据盘数据。  快照ID的获取方法：  登录管理控制台，打开\"云硬盘 > 快照\"页面，根据原始数据盘的磁盘名称找到对应的快照ID。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
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

