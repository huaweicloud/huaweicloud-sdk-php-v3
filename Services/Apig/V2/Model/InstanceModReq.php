<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceModReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceModReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您填写该参数为空，系统生成的终端节点服务的名称为{region}.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'instanceName' => 'string',
            'securityGroupId' => 'string',
            'vpcepServiceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您填写该参数为空，系统生成的终端节点服务的名称为{region}.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'instanceName' => null,
        'securityGroupId' => null,
        'vpcepServiceName' => null
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
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您填写该参数为空，系统生成的终端节点服务的名称为{region}.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'instanceName' => 'instance_name',
            'securityGroupId' => 'security_group_id',
            'vpcepServiceName' => 'vpcep_service_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您填写该参数为空，系统生成的终端节点服务的名称为{region}.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'instanceName' => 'setInstanceName',
            'securityGroupId' => 'setSecurityGroupId',
            'vpcepServiceName' => 'setVpcepServiceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  实例描述。支持除>和<以外的字符，长度为0~255。
    * maintainBegin  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * maintainEnd  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    * instanceName  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * vpcepServiceName  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您填写该参数为空，系统生成的终端节点服务的名称为{region}.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'instanceName' => 'getInstanceName',
            'securityGroupId' => 'getSecurityGroupId',
            'vpcepServiceName' => 'getVpcepServiceName'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['vpcepServiceName'] = isset($data['vpcepServiceName']) ? $data['vpcepServiceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && !preg_match("/^[^><]{0,255}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^><]{0,255}$/.";
            }
            if (!is_null($this->container['maintainBegin']) && !preg_match("/^([0-1][0-9]|[2][0-4]):00:00$/", $this->container['maintainBegin'])) {
                $invalidProperties[] = "invalid value for 'maintainBegin', must be conform to the pattern /^([0-1][0-9]|[2][0-4]):00:00$/.";
            }
            if (!is_null($this->container['maintainEnd']) && !preg_match("/^([0-1][0-9]|[2][0-4]):00:00$/", $this->container['maintainEnd'])) {
                $invalidProperties[] = "invalid value for 'maintainEnd', must be conform to the pattern /^([0-1][0-9]|[2][0-4]):00:00$/.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 3)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['instanceName']) && !preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,63}$/", $this->container['instanceName'])) {
                $invalidProperties[] = "invalid value for 'instanceName', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,63}$/.";
            }
            if (!is_null($this->container['securityGroupId']) && !preg_match("/^[a-f0-9][a-fA-F0-9_-]{34}[a-f0-9]$/", $this->container['securityGroupId'])) {
                $invalidProperties[] = "invalid value for 'securityGroupId', must be conform to the pattern /^[a-f0-9][a-fA-F0-9_-]{34}[a-f0-9]$/.";
            }
            if (!is_null($this->container['vpcepServiceName']) && !preg_match("/^[a-zA-Z0-9_-]{0,16}$/", $this->container['vpcepServiceName'])) {
                $invalidProperties[] = "invalid value for 'vpcepServiceName', must be conform to the pattern /^[a-zA-Z0-9_-]{0,16}$/.";
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
    * Gets description
    *  实例描述。支持除>和<以外的字符，长度为0~255。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 实例描述。支持除>和<以外的字符，长度为0~255。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    *
    * @return string|null
    */
    public function getMaintainBegin()
    {
        return $this->container['maintainBegin'];
    }

    /**
    * Sets maintainBegin
    *
    * @param string|null $maintainBegin 维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    *
    * @return $this
    */
    public function setMaintainBegin($maintainBegin)
    {
        $this->container['maintainBegin'] = $maintainBegin;
        return $this;
    }

    /**
    * Gets maintainEnd
    *  维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    *
    * @return string|null
    */
    public function getMaintainEnd()
    {
        return $this->container['maintainEnd'];
    }

    /**
    * Sets maintainEnd
    *
    * @param string|null $maintainEnd 维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。  在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。  中英文字符开头，只能由中英文字符、数字、中划线、下划线组成，长度为3~64。  > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets vpcepServiceName
    *  终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您填写该参数为空，系统生成的终端节点服务的名称为{region}.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。
    *
    * @return string|null
    */
    public function getVpcepServiceName()
    {
        return $this->container['vpcepServiceName'];
    }

    /**
    * Sets vpcepServiceName
    *
    * @param string|null $vpcepServiceName 终端节点服务的名称。  支持英文、数字、中划线、下划线，0~16个字符。  如果您填写该参数为空，系统生成的终端节点服务的名称为{region}.{service_id}。 如果您填写该参数，系统生成的终端节点服务的名称为{region}.{vpcep_service_name}.{service_id}。
    *
    * @return $this
    */
    public function setVpcepServiceName($vpcepServiceName)
    {
        $this->container['vpcepServiceName'] = $vpcepServiceName;
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

