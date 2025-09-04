<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectPermissionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectPermissionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**： 填写需要查询构建历史列表的构建任务ID。获取方法：在构建任务详情页，拷贝浏览器URL末尾的32位数字、字母组合的字符串，即为构建任务ID。 **约束限制**： 不涉及。 **取值范围**： 只能是英文字母和数字，长度为32个字符。 **默认取值**： 不涉及。
    * projectId  **参数解释**： CodeArts项目ID。获取方式请参考[获取CodeArts项目ID](https://support.huaweicloud.com/api-codeci/cloudbuild_03_0022.html)。 **约束限制**： 不涉及。 **取值范围**： 32位数字、字母组合的字符串。 **默认取值**： 不涉及。
    * projectSwitch  **参数解释**： 是否同步最新一次项目权限。 **约束限制**： 不涉及。 **取值范围**： ● true：使用项目级权限。 ● false：不使用项目级权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'projectId' => 'string',
            'projectSwitch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**： 填写需要查询构建历史列表的构建任务ID。获取方法：在构建任务详情页，拷贝浏览器URL末尾的32位数字、字母组合的字符串，即为构建任务ID。 **约束限制**： 不涉及。 **取值范围**： 只能是英文字母和数字，长度为32个字符。 **默认取值**： 不涉及。
    * projectId  **参数解释**： CodeArts项目ID。获取方式请参考[获取CodeArts项目ID](https://support.huaweicloud.com/api-codeci/cloudbuild_03_0022.html)。 **约束限制**： 不涉及。 **取值范围**： 32位数字、字母组合的字符串。 **默认取值**： 不涉及。
    * projectSwitch  **参数解释**： 是否同步最新一次项目权限。 **约束限制**： 不涉及。 **取值范围**： ● true：使用项目级权限。 ● false：不使用项目级权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'projectId' => null,
        'projectSwitch' => null
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
    * jobId  **参数解释**： 填写需要查询构建历史列表的构建任务ID。获取方法：在构建任务详情页，拷贝浏览器URL末尾的32位数字、字母组合的字符串，即为构建任务ID。 **约束限制**： 不涉及。 **取值范围**： 只能是英文字母和数字，长度为32个字符。 **默认取值**： 不涉及。
    * projectId  **参数解释**： CodeArts项目ID。获取方式请参考[获取CodeArts项目ID](https://support.huaweicloud.com/api-codeci/cloudbuild_03_0022.html)。 **约束限制**： 不涉及。 **取值范围**： 32位数字、字母组合的字符串。 **默认取值**： 不涉及。
    * projectSwitch  **参数解释**： 是否同步最新一次项目权限。 **约束限制**： 不涉及。 **取值范围**： ● true：使用项目级权限。 ● false：不使用项目级权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'projectId' => 'project_id',
            'projectSwitch' => 'project_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**： 填写需要查询构建历史列表的构建任务ID。获取方法：在构建任务详情页，拷贝浏览器URL末尾的32位数字、字母组合的字符串，即为构建任务ID。 **约束限制**： 不涉及。 **取值范围**： 只能是英文字母和数字，长度为32个字符。 **默认取值**： 不涉及。
    * projectId  **参数解释**： CodeArts项目ID。获取方式请参考[获取CodeArts项目ID](https://support.huaweicloud.com/api-codeci/cloudbuild_03_0022.html)。 **约束限制**： 不涉及。 **取值范围**： 32位数字、字母组合的字符串。 **默认取值**： 不涉及。
    * projectSwitch  **参数解释**： 是否同步最新一次项目权限。 **约束限制**： 不涉及。 **取值范围**： ● true：使用项目级权限。 ● false：不使用项目级权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'projectId' => 'setProjectId',
            'projectSwitch' => 'setProjectSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**： 填写需要查询构建历史列表的构建任务ID。获取方法：在构建任务详情页，拷贝浏览器URL末尾的32位数字、字母组合的字符串，即为构建任务ID。 **约束限制**： 不涉及。 **取值范围**： 只能是英文字母和数字，长度为32个字符。 **默认取值**： 不涉及。
    * projectId  **参数解释**： CodeArts项目ID。获取方式请参考[获取CodeArts项目ID](https://support.huaweicloud.com/api-codeci/cloudbuild_03_0022.html)。 **约束限制**： 不涉及。 **取值范围**： 32位数字、字母组合的字符串。 **默认取值**： 不涉及。
    * projectSwitch  **参数解释**： 是否同步最新一次项目权限。 **约束限制**： 不涉及。 **取值范围**： ● true：使用项目级权限。 ● false：不使用项目级权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'projectId' => 'getProjectId',
            'projectSwitch' => 'getProjectSwitch'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectSwitch'] = isset($data['projectSwitch']) ? $data['projectSwitch'] : null;
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
    * Gets jobId
    *  **参数解释**： 填写需要查询构建历史列表的构建任务ID。获取方法：在构建任务详情页，拷贝浏览器URL末尾的32位数字、字母组合的字符串，即为构建任务ID。 **约束限制**： 不涉及。 **取值范围**： 只能是英文字母和数字，长度为32个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**： 填写需要查询构建历史列表的构建任务ID。获取方法：在构建任务详情页，拷贝浏览器URL末尾的32位数字、字母组合的字符串，即为构建任务ID。 **约束限制**： 不涉及。 **取值范围**： 只能是英文字母和数字，长度为32个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： CodeArts项目ID。获取方式请参考[获取CodeArts项目ID](https://support.huaweicloud.com/api-codeci/cloudbuild_03_0022.html)。 **约束限制**： 不涉及。 **取值范围**： 32位数字、字母组合的字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： CodeArts项目ID。获取方式请参考[获取CodeArts项目ID](https://support.huaweicloud.com/api-codeci/cloudbuild_03_0022.html)。 **约束限制**： 不涉及。 **取值范围**： 32位数字、字母组合的字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectSwitch
    *  **参数解释**： 是否同步最新一次项目权限。 **约束限制**： 不涉及。 **取值范围**： ● true：使用项目级权限。 ● false：不使用项目级权限。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getProjectSwitch()
    {
        return $this->container['projectSwitch'];
    }

    /**
    * Sets projectSwitch
    *
    * @param bool|null $projectSwitch **参数解释**： 是否同步最新一次项目权限。 **约束限制**： 不涉及。 **取值范围**： ● true：使用项目级权限。 ● false：不使用项目级权限。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectSwitch($projectSwitch)
    {
        $this->container['projectSwitch'] = $projectSwitch;
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

