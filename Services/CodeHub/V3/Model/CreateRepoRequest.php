<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRepoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRepoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * name  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * projectUuid  指定项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * templateId  复制模板的ID
    * visibilityLevel  仓库状态，取值范围：0->私有，20->公开只读
    * importUrl  模板仓库的https地址的base64加密
    * description  仓库描述信息
    * gitignoreId  根据编程语言生成.gitignore文件
    * licenseId  许可证id
    * enableReadme  是否允许生成README文件
    * caller  调用者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'importMembers' => 'int',
            'name' => 'string',
            'projectUuid' => 'string',
            'templateId' => 'string',
            'visibilityLevel' => 'int',
            'importUrl' => 'string',
            'description' => 'string',
            'gitignoreId' => 'string',
            'licenseId' => 'int',
            'enableReadme' => 'int',
            'caller' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * name  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * projectUuid  指定项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * templateId  复制模板的ID
    * visibilityLevel  仓库状态，取值范围：0->私有，20->公开只读
    * importUrl  模板仓库的https地址的base64加密
    * description  仓库描述信息
    * gitignoreId  根据编程语言生成.gitignore文件
    * licenseId  许可证id
    * enableReadme  是否允许生成README文件
    * caller  调用者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'importMembers' => 'int32',
        'name' => null,
        'projectUuid' => null,
        'templateId' => null,
        'visibilityLevel' => 'int32',
        'importUrl' => null,
        'description' => null,
        'gitignoreId' => null,
        'licenseId' => 'int32',
        'enableReadme' => 'int32',
        'caller' => null
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
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * name  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * projectUuid  指定项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * templateId  复制模板的ID
    * visibilityLevel  仓库状态，取值范围：0->私有，20->公开只读
    * importUrl  模板仓库的https地址的base64加密
    * description  仓库描述信息
    * gitignoreId  根据编程语言生成.gitignore文件
    * licenseId  许可证id
    * enableReadme  是否允许生成README文件
    * caller  调用者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'importMembers' => 'import_members',
            'name' => 'name',
            'projectUuid' => 'project_uuid',
            'templateId' => 'template_id',
            'visibilityLevel' => 'visibility_level',
            'importUrl' => 'import_url',
            'description' => 'description',
            'gitignoreId' => 'gitignore_id',
            'licenseId' => 'license_id',
            'enableReadme' => 'enable_readme',
            'caller' => 'caller'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * name  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * projectUuid  指定项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * templateId  复制模板的ID
    * visibilityLevel  仓库状态，取值范围：0->私有，20->公开只读
    * importUrl  模板仓库的https地址的base64加密
    * description  仓库描述信息
    * gitignoreId  根据编程语言生成.gitignore文件
    * licenseId  许可证id
    * enableReadme  是否允许生成README文件
    * caller  调用者
    *
    * @var string[]
    */
    protected static $setters = [
            'importMembers' => 'setImportMembers',
            'name' => 'setName',
            'projectUuid' => 'setProjectUuid',
            'templateId' => 'setTemplateId',
            'visibilityLevel' => 'setVisibilityLevel',
            'importUrl' => 'setImportUrl',
            'description' => 'setDescription',
            'gitignoreId' => 'setGitignoreId',
            'licenseId' => 'setLicenseId',
            'enableReadme' => 'setEnableReadme',
            'caller' => 'setCaller'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * name  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * projectUuid  指定项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * templateId  复制模板的ID
    * visibilityLevel  仓库状态，取值范围：0->私有，20->公开只读
    * importUrl  模板仓库的https地址的base64加密
    * description  仓库描述信息
    * gitignoreId  根据编程语言生成.gitignore文件
    * licenseId  许可证id
    * enableReadme  是否允许生成README文件
    * caller  调用者
    *
    * @var string[]
    */
    protected static $getters = [
            'importMembers' => 'getImportMembers',
            'name' => 'getName',
            'projectUuid' => 'getProjectUuid',
            'templateId' => 'getTemplateId',
            'visibilityLevel' => 'getVisibilityLevel',
            'importUrl' => 'getImportUrl',
            'description' => 'getDescription',
            'gitignoreId' => 'getGitignoreId',
            'licenseId' => 'getLicenseId',
            'enableReadme' => 'getEnableReadme',
            'caller' => 'getCaller'
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
        $this->container['importMembers'] = isset($data['importMembers']) ? $data['importMembers'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['visibilityLevel'] = isset($data['visibilityLevel']) ? $data['visibilityLevel'] : null;
        $this->container['importUrl'] = isset($data['importUrl']) ? $data['importUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gitignoreId'] = isset($data['gitignoreId']) ? $data['gitignoreId'] : null;
        $this->container['licenseId'] = isset($data['licenseId']) ? $data['licenseId'] : null;
        $this->container['enableReadme'] = isset($data['enableReadme']) ? $data['enableReadme'] : null;
        $this->container['caller'] = isset($data['caller']) ? $data['caller'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectUuid'] === null) {
            $invalidProperties[] = "'projectUuid' can't be null";
        }
            if ((mb_strlen($this->container['projectUuid']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectUuid', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectUuid']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectUuid', the character length must be bigger than or equal to 32.";
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
    * Gets importMembers
    *  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    *
    * @return int|null
    */
    public function getImportMembers()
    {
        return $this->container['importMembers'];
    }

    /**
    * Sets importMembers
    *
    * @param int|null $importMembers 是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    *
    * @return $this
    */
    public function setImportMembers($importMembers)
    {
        $this->container['importMembers'] = $importMembers;
        return $this;
    }

    /**
    * Gets name
    *  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
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
    * @param string $name 仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectUuid
    *  指定项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return string
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string $projectUuid 指定项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets templateId
    *  复制模板的ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 复制模板的ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets visibilityLevel
    *  仓库状态，取值范围：0->私有，20->公开只读
    *
    * @return int|null
    */
    public function getVisibilityLevel()
    {
        return $this->container['visibilityLevel'];
    }

    /**
    * Sets visibilityLevel
    *
    * @param int|null $visibilityLevel 仓库状态，取值范围：0->私有，20->公开只读
    *
    * @return $this
    */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->container['visibilityLevel'] = $visibilityLevel;
        return $this;
    }

    /**
    * Gets importUrl
    *  模板仓库的https地址的base64加密
    *
    * @return string|null
    */
    public function getImportUrl()
    {
        return $this->container['importUrl'];
    }

    /**
    * Sets importUrl
    *
    * @param string|null $importUrl 模板仓库的https地址的base64加密
    *
    * @return $this
    */
    public function setImportUrl($importUrl)
    {
        $this->container['importUrl'] = $importUrl;
        return $this;
    }

    /**
    * Gets description
    *  仓库描述信息
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
    * @param string|null $description 仓库描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets gitignoreId
    *  根据编程语言生成.gitignore文件
    *
    * @return string|null
    */
    public function getGitignoreId()
    {
        return $this->container['gitignoreId'];
    }

    /**
    * Sets gitignoreId
    *
    * @param string|null $gitignoreId 根据编程语言生成.gitignore文件
    *
    * @return $this
    */
    public function setGitignoreId($gitignoreId)
    {
        $this->container['gitignoreId'] = $gitignoreId;
        return $this;
    }

    /**
    * Gets licenseId
    *  许可证id
    *
    * @return int|null
    */
    public function getLicenseId()
    {
        return $this->container['licenseId'];
    }

    /**
    * Sets licenseId
    *
    * @param int|null $licenseId 许可证id
    *
    * @return $this
    */
    public function setLicenseId($licenseId)
    {
        $this->container['licenseId'] = $licenseId;
        return $this;
    }

    /**
    * Gets enableReadme
    *  是否允许生成README文件
    *
    * @return int|null
    */
    public function getEnableReadme()
    {
        return $this->container['enableReadme'];
    }

    /**
    * Sets enableReadme
    *
    * @param int|null $enableReadme 是否允许生成README文件
    *
    * @return $this
    */
    public function setEnableReadme($enableReadme)
    {
        $this->container['enableReadme'] = $enableReadme;
        return $this;
    }

    /**
    * Gets caller
    *  调用者
    *
    * @return string|null
    */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
    * Sets caller
    *
    * @param string|null $caller 调用者
    *
    * @return $this
    */
    public function setCaller($caller)
    {
        $this->container['caller'] = $caller;
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

