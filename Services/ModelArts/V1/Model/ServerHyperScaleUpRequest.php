<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerHyperScaleUpRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerHyperScaleUpRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：不涉及。 **取值范围**：长度为1至128个字符，只能包含字母和数字及点。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * userdata  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点扩容仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'rootVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\EvsVolume',
            'dataVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerDataVolume',
            'imageId' => 'string',
            'userdata' => 'string',
            'keyPairName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：不涉及。 **取值范围**：长度为1至128个字符，只能包含字母和数字及点。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * userdata  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点扩容仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'rootVolume' => null,
        'dataVolume' => null,
        'imageId' => null,
        'userdata' => null,
        'keyPairName' => null
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
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：不涉及。 **取值范围**：长度为1至128个字符，只能包含字母和数字及点。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * userdata  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点扩容仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'rootVolume' => 'root_volume',
            'dataVolume' => 'data_volume',
            'imageId' => 'image_id',
            'userdata' => 'userdata',
            'keyPairName' => 'key_pair_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：不涉及。 **取值范围**：长度为1至128个字符，只能包含字母和数字及点。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * userdata  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点扩容仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'rootVolume' => 'setRootVolume',
            'dataVolume' => 'setDataVolume',
            'imageId' => 'setImageId',
            'userdata' => 'setUserdata',
            'keyPairName' => 'setKeyPairName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：不涉及。 **取值范围**：长度为1至128个字符，只能包含字母和数字及点。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * userdata  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点扩容仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'rootVolume' => 'getRootVolume',
            'dataVolume' => 'getDataVolume',
            'imageId' => 'getImageId',
            'userdata' => 'getUserdata',
            'keyPairName' => 'getKeyPairName'
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolume'] = isset($data['dataVolume']) ? $data['dataVolume'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['userdata'] = isset($data['userdata']) ? $data['userdata'] : null;
        $this->container['keyPairName'] = isset($data['keyPairName']) ? $data['keyPairName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
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
    * Gets flavor
    *  **参数解释**：服务器规格名称。 **约束限制**：不涉及。 **取值范围**：长度为1至128个字符，只能包含字母和数字及点。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor **参数解释**：服务器规格名称。 **约束限制**：不涉及。 **取值范围**：长度为1至128个字符，只能包含字母和数字及点。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\EvsVolume|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\EvsVolume|null $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets dataVolume
    *  dataVolume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerDataVolume|null
    */
    public function getDataVolume()
    {
        return $this->container['dataVolume'];
    }

    /**
    * Sets dataVolume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerDataVolume|null $dataVolume dataVolume
    *
    * @return $this
    */
    public function setDataVolume($dataVolume)
    {
        $this->container['dataVolume'] = $dataVolume;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets userdata
    *  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getUserdata()
    {
        return $this->container['userdata'];
    }

    /**
    * Sets userdata
    *
    * @param string|null $userdata **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUserdata($userdata)
    {
        $this->container['userdata'] = $userdata;
        return $this;
    }

    /**
    * Gets keyPairName
    *  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点扩容仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getKeyPairName()
    {
        return $this->container['keyPairName'];
    }

    /**
    * Sets keyPairName
    *
    * @param string|null $keyPairName **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点扩容仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setKeyPairName($keyPairName)
    {
        $this->container['keyPairName'] = $keyPairName;
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

