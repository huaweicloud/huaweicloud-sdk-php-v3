<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Share implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Share';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  文件系统所在可用区(az)的编码
    * description  文件系统描述信息，长度为0~255。当前不支持。
    * enterpriseProjectId  创建文件系统时，给文件系统绑定的企业项目ID。
    * metadata  metadata
    * name  SFS Turbo文件系统的名称。长度为4~64位，必须以字母开头，可以包含字母、数字、中划线、下划线，不能包含其他的特殊字符，不区分大小写。
    * securityGroupId  用户在某一区域下的安全组ID。
    * shareProto  文件系统共享协议，有效值为NFS。NFS（Network File System），即网络文件系统。一种使用于分散式文件系统的协议，通过网络让不同的机器、不同的操作系统能够彼此分享数据。
    * shareType  文件系统类型，有效值为STANDARD或者PERFORMANCE。 通用型：标准型和标准型增强版填写STANDARD，性能型和性能型增强版填写PERFORMANCE。 HPC型：不校验该字段，可填写STANDARD或者PERFORMANCE。 HPC缓存型：不校验该字段，可填写STANDARD或者PERFORMANCE。
    * size  通用型-普通文件系统容量，取值范围500~32768，单位GB。 通用型-增强版文件系统，即在“metadata”字段中设置了expand_type=\"bandwidth\"，则容量范围是10240~327680，单位GiB。 HPC型文件系统，即在“metadata”字段中设置了expand_type=\"hpc\"，则容量范围是3686(或1228)~1048576，单位GiB。对于20MB/s/TiB的规格，起步容量为3686GiB；对于HPC其他规格，起步容量为1228GiB。HPC型文件系统的容量必须为1.2TiB的倍数，换算为GiB后需要向下取整。如3.6TiB->3686GiB, 4.8TiB->4915GiB，8.4TiB->8601GiB。 HPC缓存型文件系统，即在“metadata”字段中设置了expand_type=\"hpc_cache\"，则容量范围是4096~1048576，单位GiB。不同带宽，起步容量不一样，步长均为1TiB。如2GB/s带宽，起步容量为4TiB，即4096GiB；4GB/s带宽，起步容量为8TiB，即8192GiB；8GB/s带宽，起步容量为16TiB，即16384GiB。
    * subnetId  用户在VPC下面的子网的网络ID。
    * vpcId  用户在某一区域下的VPC ID。
    * backupId  备份ID，从备份创建文件系统时为必选。
    * tags  tag标签的列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'metadata' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\Metadata',
            'name' => 'string',
            'securityGroupId' => 'string',
            'shareProto' => 'string',
            'shareType' => 'string',
            'size' => 'int',
            'subnetId' => 'string',
            'vpcId' => 'string',
            'backupId' => 'string',
            'tags' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  文件系统所在可用区(az)的编码
    * description  文件系统描述信息，长度为0~255。当前不支持。
    * enterpriseProjectId  创建文件系统时，给文件系统绑定的企业项目ID。
    * metadata  metadata
    * name  SFS Turbo文件系统的名称。长度为4~64位，必须以字母开头，可以包含字母、数字、中划线、下划线，不能包含其他的特殊字符，不区分大小写。
    * securityGroupId  用户在某一区域下的安全组ID。
    * shareProto  文件系统共享协议，有效值为NFS。NFS（Network File System），即网络文件系统。一种使用于分散式文件系统的协议，通过网络让不同的机器、不同的操作系统能够彼此分享数据。
    * shareType  文件系统类型，有效值为STANDARD或者PERFORMANCE。 通用型：标准型和标准型增强版填写STANDARD，性能型和性能型增强版填写PERFORMANCE。 HPC型：不校验该字段，可填写STANDARD或者PERFORMANCE。 HPC缓存型：不校验该字段，可填写STANDARD或者PERFORMANCE。
    * size  通用型-普通文件系统容量，取值范围500~32768，单位GB。 通用型-增强版文件系统，即在“metadata”字段中设置了expand_type=\"bandwidth\"，则容量范围是10240~327680，单位GiB。 HPC型文件系统，即在“metadata”字段中设置了expand_type=\"hpc\"，则容量范围是3686(或1228)~1048576，单位GiB。对于20MB/s/TiB的规格，起步容量为3686GiB；对于HPC其他规格，起步容量为1228GiB。HPC型文件系统的容量必须为1.2TiB的倍数，换算为GiB后需要向下取整。如3.6TiB->3686GiB, 4.8TiB->4915GiB，8.4TiB->8601GiB。 HPC缓存型文件系统，即在“metadata”字段中设置了expand_type=\"hpc_cache\"，则容量范围是4096~1048576，单位GiB。不同带宽，起步容量不一样，步长均为1TiB。如2GB/s带宽，起步容量为4TiB，即4096GiB；4GB/s带宽，起步容量为8TiB，即8192GiB；8GB/s带宽，起步容量为16TiB，即16384GiB。
    * subnetId  用户在VPC下面的子网的网络ID。
    * vpcId  用户在某一区域下的VPC ID。
    * backupId  备份ID，从备份创建文件系统时为必选。
    * tags  tag标签的列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'metadata' => null,
        'name' => null,
        'securityGroupId' => null,
        'shareProto' => null,
        'shareType' => null,
        'size' => null,
        'subnetId' => null,
        'vpcId' => null,
        'backupId' => null,
        'tags' => null
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
    * availabilityZone  文件系统所在可用区(az)的编码
    * description  文件系统描述信息，长度为0~255。当前不支持。
    * enterpriseProjectId  创建文件系统时，给文件系统绑定的企业项目ID。
    * metadata  metadata
    * name  SFS Turbo文件系统的名称。长度为4~64位，必须以字母开头，可以包含字母、数字、中划线、下划线，不能包含其他的特殊字符，不区分大小写。
    * securityGroupId  用户在某一区域下的安全组ID。
    * shareProto  文件系统共享协议，有效值为NFS。NFS（Network File System），即网络文件系统。一种使用于分散式文件系统的协议，通过网络让不同的机器、不同的操作系统能够彼此分享数据。
    * shareType  文件系统类型，有效值为STANDARD或者PERFORMANCE。 通用型：标准型和标准型增强版填写STANDARD，性能型和性能型增强版填写PERFORMANCE。 HPC型：不校验该字段，可填写STANDARD或者PERFORMANCE。 HPC缓存型：不校验该字段，可填写STANDARD或者PERFORMANCE。
    * size  通用型-普通文件系统容量，取值范围500~32768，单位GB。 通用型-增强版文件系统，即在“metadata”字段中设置了expand_type=\"bandwidth\"，则容量范围是10240~327680，单位GiB。 HPC型文件系统，即在“metadata”字段中设置了expand_type=\"hpc\"，则容量范围是3686(或1228)~1048576，单位GiB。对于20MB/s/TiB的规格，起步容量为3686GiB；对于HPC其他规格，起步容量为1228GiB。HPC型文件系统的容量必须为1.2TiB的倍数，换算为GiB后需要向下取整。如3.6TiB->3686GiB, 4.8TiB->4915GiB，8.4TiB->8601GiB。 HPC缓存型文件系统，即在“metadata”字段中设置了expand_type=\"hpc_cache\"，则容量范围是4096~1048576，单位GiB。不同带宽，起步容量不一样，步长均为1TiB。如2GB/s带宽，起步容量为4TiB，即4096GiB；4GB/s带宽，起步容量为8TiB，即8192GiB；8GB/s带宽，起步容量为16TiB，即16384GiB。
    * subnetId  用户在VPC下面的子网的网络ID。
    * vpcId  用户在某一区域下的VPC ID。
    * backupId  备份ID，从备份创建文件系统时为必选。
    * tags  tag标签的列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'metadata' => 'metadata',
            'name' => 'name',
            'securityGroupId' => 'security_group_id',
            'shareProto' => 'share_proto',
            'shareType' => 'share_type',
            'size' => 'size',
            'subnetId' => 'subnet_id',
            'vpcId' => 'vpc_id',
            'backupId' => 'backup_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  文件系统所在可用区(az)的编码
    * description  文件系统描述信息，长度为0~255。当前不支持。
    * enterpriseProjectId  创建文件系统时，给文件系统绑定的企业项目ID。
    * metadata  metadata
    * name  SFS Turbo文件系统的名称。长度为4~64位，必须以字母开头，可以包含字母、数字、中划线、下划线，不能包含其他的特殊字符，不区分大小写。
    * securityGroupId  用户在某一区域下的安全组ID。
    * shareProto  文件系统共享协议，有效值为NFS。NFS（Network File System），即网络文件系统。一种使用于分散式文件系统的协议，通过网络让不同的机器、不同的操作系统能够彼此分享数据。
    * shareType  文件系统类型，有效值为STANDARD或者PERFORMANCE。 通用型：标准型和标准型增强版填写STANDARD，性能型和性能型增强版填写PERFORMANCE。 HPC型：不校验该字段，可填写STANDARD或者PERFORMANCE。 HPC缓存型：不校验该字段，可填写STANDARD或者PERFORMANCE。
    * size  通用型-普通文件系统容量，取值范围500~32768，单位GB。 通用型-增强版文件系统，即在“metadata”字段中设置了expand_type=\"bandwidth\"，则容量范围是10240~327680，单位GiB。 HPC型文件系统，即在“metadata”字段中设置了expand_type=\"hpc\"，则容量范围是3686(或1228)~1048576，单位GiB。对于20MB/s/TiB的规格，起步容量为3686GiB；对于HPC其他规格，起步容量为1228GiB。HPC型文件系统的容量必须为1.2TiB的倍数，换算为GiB后需要向下取整。如3.6TiB->3686GiB, 4.8TiB->4915GiB，8.4TiB->8601GiB。 HPC缓存型文件系统，即在“metadata”字段中设置了expand_type=\"hpc_cache\"，则容量范围是4096~1048576，单位GiB。不同带宽，起步容量不一样，步长均为1TiB。如2GB/s带宽，起步容量为4TiB，即4096GiB；4GB/s带宽，起步容量为8TiB，即8192GiB；8GB/s带宽，起步容量为16TiB，即16384GiB。
    * subnetId  用户在VPC下面的子网的网络ID。
    * vpcId  用户在某一区域下的VPC ID。
    * backupId  备份ID，从备份创建文件系统时为必选。
    * tags  tag标签的列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'metadata' => 'setMetadata',
            'name' => 'setName',
            'securityGroupId' => 'setSecurityGroupId',
            'shareProto' => 'setShareProto',
            'shareType' => 'setShareType',
            'size' => 'setSize',
            'subnetId' => 'setSubnetId',
            'vpcId' => 'setVpcId',
            'backupId' => 'setBackupId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  文件系统所在可用区(az)的编码
    * description  文件系统描述信息，长度为0~255。当前不支持。
    * enterpriseProjectId  创建文件系统时，给文件系统绑定的企业项目ID。
    * metadata  metadata
    * name  SFS Turbo文件系统的名称。长度为4~64位，必须以字母开头，可以包含字母、数字、中划线、下划线，不能包含其他的特殊字符，不区分大小写。
    * securityGroupId  用户在某一区域下的安全组ID。
    * shareProto  文件系统共享协议，有效值为NFS。NFS（Network File System），即网络文件系统。一种使用于分散式文件系统的协议，通过网络让不同的机器、不同的操作系统能够彼此分享数据。
    * shareType  文件系统类型，有效值为STANDARD或者PERFORMANCE。 通用型：标准型和标准型增强版填写STANDARD，性能型和性能型增强版填写PERFORMANCE。 HPC型：不校验该字段，可填写STANDARD或者PERFORMANCE。 HPC缓存型：不校验该字段，可填写STANDARD或者PERFORMANCE。
    * size  通用型-普通文件系统容量，取值范围500~32768，单位GB。 通用型-增强版文件系统，即在“metadata”字段中设置了expand_type=\"bandwidth\"，则容量范围是10240~327680，单位GiB。 HPC型文件系统，即在“metadata”字段中设置了expand_type=\"hpc\"，则容量范围是3686(或1228)~1048576，单位GiB。对于20MB/s/TiB的规格，起步容量为3686GiB；对于HPC其他规格，起步容量为1228GiB。HPC型文件系统的容量必须为1.2TiB的倍数，换算为GiB后需要向下取整。如3.6TiB->3686GiB, 4.8TiB->4915GiB，8.4TiB->8601GiB。 HPC缓存型文件系统，即在“metadata”字段中设置了expand_type=\"hpc_cache\"，则容量范围是4096~1048576，单位GiB。不同带宽，起步容量不一样，步长均为1TiB。如2GB/s带宽，起步容量为4TiB，即4096GiB；4GB/s带宽，起步容量为8TiB，即8192GiB；8GB/s带宽，起步容量为16TiB，即16384GiB。
    * subnetId  用户在VPC下面的子网的网络ID。
    * vpcId  用户在某一区域下的VPC ID。
    * backupId  备份ID，从备份创建文件系统时为必选。
    * tags  tag标签的列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'metadata' => 'getMetadata',
            'name' => 'getName',
            'securityGroupId' => 'getSecurityGroupId',
            'shareProto' => 'getShareProto',
            'shareType' => 'getShareType',
            'size' => 'getSize',
            'subnetId' => 'getSubnetId',
            'vpcId' => 'getVpcId',
            'backupId' => 'getBackupId',
            'tags' => 'getTags'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['shareProto'] = isset($data['shareProto']) ? $data['shareProto'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['shareProto'] === null) {
            $invalidProperties[] = "'shareProto' can't be null";
        }
        if ($this->container['shareType'] === null) {
            $invalidProperties[] = "'shareType' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] >= 1048576)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than 1048576.";
            }
            if (($this->container['size'] <= 500)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than 500.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
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
    * Gets availabilityZone
    *  文件系统所在可用区(az)的编码
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 文件系统所在可用区(az)的编码
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets description
    *  文件系统描述信息，长度为0~255。当前不支持。
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
    * @param string|null $description 文件系统描述信息，长度为0~255。当前不支持。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  创建文件系统时，给文件系统绑定的企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 创建文件系统时，给文件系统绑定的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\Metadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\Metadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets name
    *  SFS Turbo文件系统的名称。长度为4~64位，必须以字母开头，可以包含字母、数字、中划线、下划线，不能包含其他的特殊字符，不区分大小写。
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
    * @param string $name SFS Turbo文件系统的名称。长度为4~64位，必须以字母开头，可以包含字母、数字、中划线、下划线，不能包含其他的特殊字符，不区分大小写。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  用户在某一区域下的安全组ID。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 用户在某一区域下的安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets shareProto
    *  文件系统共享协议，有效值为NFS。NFS（Network File System），即网络文件系统。一种使用于分散式文件系统的协议，通过网络让不同的机器、不同的操作系统能够彼此分享数据。
    *
    * @return string
    */
    public function getShareProto()
    {
        return $this->container['shareProto'];
    }

    /**
    * Sets shareProto
    *
    * @param string $shareProto 文件系统共享协议，有效值为NFS。NFS（Network File System），即网络文件系统。一种使用于分散式文件系统的协议，通过网络让不同的机器、不同的操作系统能够彼此分享数据。
    *
    * @return $this
    */
    public function setShareProto($shareProto)
    {
        $this->container['shareProto'] = $shareProto;
        return $this;
    }

    /**
    * Gets shareType
    *  文件系统类型，有效值为STANDARD或者PERFORMANCE。 通用型：标准型和标准型增强版填写STANDARD，性能型和性能型增强版填写PERFORMANCE。 HPC型：不校验该字段，可填写STANDARD或者PERFORMANCE。 HPC缓存型：不校验该字段，可填写STANDARD或者PERFORMANCE。
    *
    * @return string
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string $shareType 文件系统类型，有效值为STANDARD或者PERFORMANCE。 通用型：标准型和标准型增强版填写STANDARD，性能型和性能型增强版填写PERFORMANCE。 HPC型：不校验该字段，可填写STANDARD或者PERFORMANCE。 HPC缓存型：不校验该字段，可填写STANDARD或者PERFORMANCE。
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets size
    *  通用型-普通文件系统容量，取值范围500~32768，单位GB。 通用型-增强版文件系统，即在“metadata”字段中设置了expand_type=\"bandwidth\"，则容量范围是10240~327680，单位GiB。 HPC型文件系统，即在“metadata”字段中设置了expand_type=\"hpc\"，则容量范围是3686(或1228)~1048576，单位GiB。对于20MB/s/TiB的规格，起步容量为3686GiB；对于HPC其他规格，起步容量为1228GiB。HPC型文件系统的容量必须为1.2TiB的倍数，换算为GiB后需要向下取整。如3.6TiB->3686GiB, 4.8TiB->4915GiB，8.4TiB->8601GiB。 HPC缓存型文件系统，即在“metadata”字段中设置了expand_type=\"hpc_cache\"，则容量范围是4096~1048576，单位GiB。不同带宽，起步容量不一样，步长均为1TiB。如2GB/s带宽，起步容量为4TiB，即4096GiB；4GB/s带宽，起步容量为8TiB，即8192GiB；8GB/s带宽，起步容量为16TiB，即16384GiB。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 通用型-普通文件系统容量，取值范围500~32768，单位GB。 通用型-增强版文件系统，即在“metadata”字段中设置了expand_type=\"bandwidth\"，则容量范围是10240~327680，单位GiB。 HPC型文件系统，即在“metadata”字段中设置了expand_type=\"hpc\"，则容量范围是3686(或1228)~1048576，单位GiB。对于20MB/s/TiB的规格，起步容量为3686GiB；对于HPC其他规格，起步容量为1228GiB。HPC型文件系统的容量必须为1.2TiB的倍数，换算为GiB后需要向下取整。如3.6TiB->3686GiB, 4.8TiB->4915GiB，8.4TiB->8601GiB。 HPC缓存型文件系统，即在“metadata”字段中设置了expand_type=\"hpc_cache\"，则容量范围是4096~1048576，单位GiB。不同带宽，起步容量不一样，步长均为1TiB。如2GB/s带宽，起步容量为4TiB，即4096GiB；4GB/s带宽，起步容量为8TiB，即8192GiB；8GB/s带宽，起步容量为16TiB，即16384GiB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets subnetId
    *  用户在VPC下面的子网的网络ID。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 用户在VPC下面的子网的网络ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  用户在某一区域下的VPC ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 用户在某一区域下的VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets backupId
    *  备份ID，从备份创建文件系统时为必选。
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份ID，从备份创建文件系统时为必选。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets tags
    *  tag标签的列表。
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null $tags tag标签的列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

