<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ForkProjectRepoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ForkProjectRepoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * projectName  项目名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * repoName  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * templateId  复制模板的ID
    * type  项目类型，scrum
    * visibilityLevel  仓库可见性：  *私有仓库：仓库仅对仓库成员可见，仓库成员可读写和访问仓库，取值范围为0  *公开仓库：   1.项目内成员只读仓库：仓库对项目内成员公开只读，并项目内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   2.租户内成员只读仓库：仓库对租户内成员公开只读，并租户内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   3.所有访客只读仓库：仓库对所有访客公开只读，并所有访客可在项目下和代码组下的仓库列表中查看和搜索，取值范围为20
    * externalProjectInfo  externalProjectInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'importMembers' => 'int',
            'projectName' => 'string',
            'repoName' => 'string',
            'templateId' => 'string',
            'type' => 'string',
            'visibilityLevel' => 'int',
            'externalProjectInfo' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ExternalKeyMessage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * projectName  项目名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * repoName  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * templateId  复制模板的ID
    * type  项目类型，scrum
    * visibilityLevel  仓库可见性：  *私有仓库：仓库仅对仓库成员可见，仓库成员可读写和访问仓库，取值范围为0  *公开仓库：   1.项目内成员只读仓库：仓库对项目内成员公开只读，并项目内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   2.租户内成员只读仓库：仓库对租户内成员公开只读，并租户内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   3.所有访客只读仓库：仓库对所有访客公开只读，并所有访客可在项目下和代码组下的仓库列表中查看和搜索，取值范围为20
    * externalProjectInfo  externalProjectInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'importMembers' => 'int32',
        'projectName' => null,
        'repoName' => null,
        'templateId' => null,
        'type' => null,
        'visibilityLevel' => 'int32',
        'externalProjectInfo' => null
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
    * projectName  项目名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * repoName  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * templateId  复制模板的ID
    * type  项目类型，scrum
    * visibilityLevel  仓库可见性：  *私有仓库：仓库仅对仓库成员可见，仓库成员可读写和访问仓库，取值范围为0  *公开仓库：   1.项目内成员只读仓库：仓库对项目内成员公开只读，并项目内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   2.租户内成员只读仓库：仓库对租户内成员公开只读，并租户内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   3.所有访客只读仓库：仓库对所有访客公开只读，并所有访客可在项目下和代码组下的仓库列表中查看和搜索，取值范围为20
    * externalProjectInfo  externalProjectInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'importMembers' => 'import_members',
            'projectName' => 'project_name',
            'repoName' => 'repo_name',
            'templateId' => 'template_id',
            'type' => 'type',
            'visibilityLevel' => 'visibility_level',
            'externalProjectInfo' => 'external_project_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * projectName  项目名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * repoName  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * templateId  复制模板的ID
    * type  项目类型，scrum
    * visibilityLevel  仓库可见性：  *私有仓库：仓库仅对仓库成员可见，仓库成员可读写和访问仓库，取值范围为0  *公开仓库：   1.项目内成员只读仓库：仓库对项目内成员公开只读，并项目内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   2.租户内成员只读仓库：仓库对租户内成员公开只读，并租户内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   3.所有访客只读仓库：仓库对所有访客公开只读，并所有访客可在项目下和代码组下的仓库列表中查看和搜索，取值范围为20
    * externalProjectInfo  externalProjectInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'importMembers' => 'setImportMembers',
            'projectName' => 'setProjectName',
            'repoName' => 'setRepoName',
            'templateId' => 'setTemplateId',
            'type' => 'setType',
            'visibilityLevel' => 'setVisibilityLevel',
            'externalProjectInfo' => 'setExternalProjectInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * importMembers  是否导入项目成员，取值范围：0->不导入项目成员，1->导入项目成员
    * projectName  项目名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * repoName  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    * templateId  复制模板的ID
    * type  项目类型，scrum
    * visibilityLevel  仓库可见性：  *私有仓库：仓库仅对仓库成员可见，仓库成员可读写和访问仓库，取值范围为0  *公开仓库：   1.项目内成员只读仓库：仓库对项目内成员公开只读，并项目内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   2.租户内成员只读仓库：仓库对租户内成员公开只读，并租户内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   3.所有访客只读仓库：仓库对所有访客公开只读，并所有访客可在项目下和代码组下的仓库列表中查看和搜索，取值范围为20
    * externalProjectInfo  externalProjectInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'importMembers' => 'getImportMembers',
            'projectName' => 'getProjectName',
            'repoName' => 'getRepoName',
            'templateId' => 'getTemplateId',
            'type' => 'getType',
            'visibilityLevel' => 'getVisibilityLevel',
            'externalProjectInfo' => 'getExternalProjectInfo'
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
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['visibilityLevel'] = isset($data['visibilityLevel']) ? $data['visibilityLevel'] : null;
        $this->container['externalProjectInfo'] = isset($data['externalProjectInfo']) ? $data['externalProjectInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
        if ($this->container['repoName'] === null) {
            $invalidProperties[] = "'repoName' can't be null";
        }
            if ((mb_strlen($this->container['repoName']) > 128)) {
                $invalidProperties[] = "invalid value for 'repoName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['repoName']) < 2)) {
                $invalidProperties[] = "invalid value for 'repoName', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
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
    * Gets projectName
    *  项目名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    *
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName 项目名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets repoName
    *  仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    *
    * @return string
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string $repoName 仓库名称，取值范围：可以输入英文大小写字母、数字、连字符、下划线，且必须以字母开头
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets templateId
    *  复制模板的ID
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 复制模板的ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets type
    *  项目类型，scrum
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
    * @param string|null $type 项目类型，scrum
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets visibilityLevel
    *  仓库可见性：  *私有仓库：仓库仅对仓库成员可见，仓库成员可读写和访问仓库，取值范围为0  *公开仓库：   1.项目内成员只读仓库：仓库对项目内成员公开只读，并项目内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   2.租户内成员只读仓库：仓库对租户内成员公开只读，并租户内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   3.所有访客只读仓库：仓库对所有访客公开只读，并所有访客可在项目下和代码组下的仓库列表中查看和搜索，取值范围为20
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
    * @param int|null $visibilityLevel 仓库可见性：  *私有仓库：仓库仅对仓库成员可见，仓库成员可读写和访问仓库，取值范围为0  *公开仓库：   1.项目内成员只读仓库：仓库对项目内成员公开只读，并项目内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   2.租户内成员只读仓库：仓库对租户内成员公开只读，并租户内成员可在项目下和代码组下的仓库列表中查看和搜索，取值范围为10   3.所有访客只读仓库：仓库对所有访客公开只读，并所有访客可在项目下和代码组下的仓库列表中查看和搜索，取值范围为20
    *
    * @return $this
    */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->container['visibilityLevel'] = $visibilityLevel;
        return $this;
    }

    /**
    * Gets externalProjectInfo
    *  externalProjectInfo
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ExternalKeyMessage|null
    */
    public function getExternalProjectInfo()
    {
        return $this->container['externalProjectInfo'];
    }

    /**
    * Sets externalProjectInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ExternalKeyMessage|null $externalProjectInfo externalProjectInfo
    *
    * @return $this
    */
    public function setExternalProjectInfo($externalProjectInfo)
    {
        $this->container['externalProjectInfo'] = $externalProjectInfo;
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

