<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWholeImageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWholeImageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  弹性云服务器ID。使用弹性云服务器制作整机镜像时使用此参数。 如果使用备份创建整机镜像，该参数应换成backup_id
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * tags  镜像标签列表。tags和image_tags只能使用一个。
    * backupId  使用云服务器备份创建整机镜像使用此参数。 如果使用ECS创建整机镜像，则该参数应传为instance_id
    * wholeImageType  使用备份创建整机镜像时，该字段区分是CBR服务的备份还是CSBS服务的备份，取值为：CBR/CSBS。 使用ECS创建整机镜像时，该字段不填
    * maxRam  表示镜像支持的最大内存，单位为MB，默认不设置。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0。
    * vaultId  表示云服务器待加入的或已加入的存储库的ID。 使用云服务器创建整机镜像的过程为：先创建一个备份，再将备份创建为整机镜像。如果这个备份为CBR，vault_id为必填项；如果备份为CSBS，vault_id参数可不填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'imageTags' => '\HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]',
            'instanceId' => 'string',
            'name' => 'string',
            'tags' => 'string[]',
            'backupId' => 'string',
            'wholeImageType' => 'string',
            'maxRam' => 'int',
            'minRam' => 'int',
            'vaultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  弹性云服务器ID。使用弹性云服务器制作整机镜像时使用此参数。 如果使用备份创建整机镜像，该参数应换成backup_id
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * tags  镜像标签列表。tags和image_tags只能使用一个。
    * backupId  使用云服务器备份创建整机镜像使用此参数。 如果使用ECS创建整机镜像，则该参数应传为instance_id
    * wholeImageType  使用备份创建整机镜像时，该字段区分是CBR服务的备份还是CSBS服务的备份，取值为：CBR/CSBS。 使用ECS创建整机镜像时，该字段不填
    * maxRam  表示镜像支持的最大内存，单位为MB，默认不设置。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0。
    * vaultId  表示云服务器待加入的或已加入的存储库的ID。 使用云服务器创建整机镜像的过程为：先创建一个备份，再将备份创建为整机镜像。如果这个备份为CBR，vault_id为必填项；如果备份为CSBS，vault_id参数可不填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'enterpriseProjectId' => null,
        'imageTags' => null,
        'instanceId' => null,
        'name' => null,
        'tags' => null,
        'backupId' => null,
        'wholeImageType' => null,
        'maxRam' => 'int32',
        'minRam' => 'int32',
        'vaultId' => null
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
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  弹性云服务器ID。使用弹性云服务器制作整机镜像时使用此参数。 如果使用备份创建整机镜像，该参数应换成backup_id
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * tags  镜像标签列表。tags和image_tags只能使用一个。
    * backupId  使用云服务器备份创建整机镜像使用此参数。 如果使用ECS创建整机镜像，则该参数应传为instance_id
    * wholeImageType  使用备份创建整机镜像时，该字段区分是CBR服务的备份还是CSBS服务的备份，取值为：CBR/CSBS。 使用ECS创建整机镜像时，该字段不填
    * maxRam  表示镜像支持的最大内存，单位为MB，默认不设置。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0。
    * vaultId  表示云服务器待加入的或已加入的存储库的ID。 使用云服务器创建整机镜像的过程为：先创建一个备份，再将备份创建为整机镜像。如果这个备份为CBR，vault_id为必填项；如果备份为CSBS，vault_id参数可不填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageTags' => 'image_tags',
            'instanceId' => 'instance_id',
            'name' => 'name',
            'tags' => 'tags',
            'backupId' => 'backup_id',
            'wholeImageType' => 'whole_image_type',
            'maxRam' => 'max_ram',
            'minRam' => 'min_ram',
            'vaultId' => 'vault_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  弹性云服务器ID。使用弹性云服务器制作整机镜像时使用此参数。 如果使用备份创建整机镜像，该参数应换成backup_id
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * tags  镜像标签列表。tags和image_tags只能使用一个。
    * backupId  使用云服务器备份创建整机镜像使用此参数。 如果使用ECS创建整机镜像，则该参数应传为instance_id
    * wholeImageType  使用备份创建整机镜像时，该字段区分是CBR服务的备份还是CSBS服务的备份，取值为：CBR/CSBS。 使用ECS创建整机镜像时，该字段不填
    * maxRam  表示镜像支持的最大内存，单位为MB，默认不设置。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0。
    * vaultId  表示云服务器待加入的或已加入的存储库的ID。 使用云服务器创建整机镜像的过程为：先创建一个备份，再将备份创建为整机镜像。如果这个备份为CBR，vault_id为必填项；如果备份为CSBS，vault_id参数可不填。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageTags' => 'setImageTags',
            'instanceId' => 'setInstanceId',
            'name' => 'setName',
            'tags' => 'setTags',
            'backupId' => 'setBackupId',
            'wholeImageType' => 'setWholeImageType',
            'maxRam' => 'setMaxRam',
            'minRam' => 'setMinRam',
            'vaultId' => 'setVaultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  弹性云服务器ID。使用弹性云服务器制作整机镜像时使用此参数。 如果使用备份创建整机镜像，该参数应换成backup_id
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * tags  镜像标签列表。tags和image_tags只能使用一个。
    * backupId  使用云服务器备份创建整机镜像使用此参数。 如果使用ECS创建整机镜像，则该参数应传为instance_id
    * wholeImageType  使用备份创建整机镜像时，该字段区分是CBR服务的备份还是CSBS服务的备份，取值为：CBR/CSBS。 使用ECS创建整机镜像时，该字段不填
    * maxRam  表示镜像支持的最大内存，单位为MB，默认不设置。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0。
    * vaultId  表示云服务器待加入的或已加入的存储库的ID。 使用云服务器创建整机镜像的过程为：先创建一个备份，再将备份创建为整机镜像。如果这个备份为CBR，vault_id为必填项；如果备份为CSBS，vault_id参数可不填。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageTags' => 'getImageTags',
            'instanceId' => 'getInstanceId',
            'name' => 'getName',
            'tags' => 'getTags',
            'backupId' => 'getBackupId',
            'wholeImageType' => 'getWholeImageType',
            'maxRam' => 'getMaxRam',
            'minRam' => 'getMinRam',
            'vaultId' => 'getVaultId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : '0';
        $this->container['imageTags'] = isset($data['imageTags']) ? $data['imageTags'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['wholeImageType'] = isset($data['wholeImageType']) ? $data['wholeImageType'] : null;
        $this->container['maxRam'] = isset($data['maxRam']) ? $data['maxRam'] : null;
        $this->container['minRam'] = isset($data['minRam']) ? $data['minRam'] : 0;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    *  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
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
    * @param string|null $description 镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
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
    *  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
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
    * @param string|null $enterpriseProjectId 表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageTags
    *  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]|null
    */
    public function getImageTags()
    {
        return $this->container['imageTags'];
    }

    /**
    * Sets imageTags
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]|null $imageTags 新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setImageTags($imageTags)
    {
        $this->container['imageTags'] = $imageTags;
        return $this;
    }

    /**
    * Gets instanceId
    *  弹性云服务器ID。使用弹性云服务器制作整机镜像时使用此参数。 如果使用备份创建整机镜像，该参数应换成backup_id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 弹性云服务器ID。使用弹性云服务器制作整机镜像时使用此参数。 如果使用备份创建整机镜像，该参数应换成backup_id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets name
    *  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
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
    * @param string $name 镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tags
    *  镜像标签列表。tags和image_tags只能使用一个。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 镜像标签列表。tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets backupId
    *  使用云服务器备份创建整机镜像使用此参数。 如果使用ECS创建整机镜像，则该参数应传为instance_id
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
    * @param string|null $backupId 使用云服务器备份创建整机镜像使用此参数。 如果使用ECS创建整机镜像，则该参数应传为instance_id
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets wholeImageType
    *  使用备份创建整机镜像时，该字段区分是CBR服务的备份还是CSBS服务的备份，取值为：CBR/CSBS。 使用ECS创建整机镜像时，该字段不填
    *
    * @return string|null
    */
    public function getWholeImageType()
    {
        return $this->container['wholeImageType'];
    }

    /**
    * Sets wholeImageType
    *
    * @param string|null $wholeImageType 使用备份创建整机镜像时，该字段区分是CBR服务的备份还是CSBS服务的备份，取值为：CBR/CSBS。 使用ECS创建整机镜像时，该字段不填
    *
    * @return $this
    */
    public function setWholeImageType($wholeImageType)
    {
        $this->container['wholeImageType'] = $wholeImageType;
        return $this;
    }

    /**
    * Gets maxRam
    *  表示镜像支持的最大内存，单位为MB，默认不设置。
    *
    * @return int|null
    */
    public function getMaxRam()
    {
        return $this->container['maxRam'];
    }

    /**
    * Sets maxRam
    *
    * @param int|null $maxRam 表示镜像支持的最大内存，单位为MB，默认不设置。
    *
    * @return $this
    */
    public function setMaxRam($maxRam)
    {
        $this->container['maxRam'] = $maxRam;
        return $this;
    }

    /**
    * Gets minRam
    *  表示镜像支持的最小内存，单位为MB，默认为0。
    *
    * @return int|null
    */
    public function getMinRam()
    {
        return $this->container['minRam'];
    }

    /**
    * Sets minRam
    *
    * @param int|null $minRam 表示镜像支持的最小内存，单位为MB，默认为0。
    *
    * @return $this
    */
    public function setMinRam($minRam)
    {
        $this->container['minRam'] = $minRam;
        return $this;
    }

    /**
    * Gets vaultId
    *  表示云服务器待加入的或已加入的存储库的ID。 使用云服务器创建整机镜像的过程为：先创建一个备份，再将备份创建为整机镜像。如果这个备份为CBR，vault_id为必填项；如果备份为CSBS，vault_id参数可不填。
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 表示云服务器待加入的或已加入的存储库的ID。 使用云服务器创建整机镜像的过程为：先创建一个备份，再将备份创建为整机镜像。如果这个备份为CBR，vault_id为必填项；如果备份为CSBS，vault_id参数可不填。
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
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

