<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTrainingJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTrainingJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tag  tag
    * description  一段描述信息,会呈现在资产库中。
    * sex  语音性别,是男性声音还是女性声音。 * FEMALE: 女性 * MALE: 男性
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * language  训练语言,当前仅支持中文。 * CN: 中文 * EN: 英文
    * createType  createType
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tag' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\JobTag',
            'description' => 'string',
            'sex' => 'string',
            'voiceName' => 'string',
            'language' => 'string',
            'createType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateType',
            'phone' => 'string',
            'dhtmsJobId' => 'string',
            'batchName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tag  tag
    * description  一段描述信息,会呈现在资产库中。
    * sex  语音性别,是男性声音还是女性声音。 * FEMALE: 女性 * MALE: 男性
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * language  训练语言,当前仅支持中文。 * CN: 中文 * EN: 英文
    * createType  createType
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tag' => null,
        'description' => null,
        'sex' => null,
        'voiceName' => null,
        'language' => null,
        'createType' => null,
        'phone' => null,
        'dhtmsJobId' => null,
        'batchName' => null
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
    * tag  tag
    * description  一段描述信息,会呈现在资产库中。
    * sex  语音性别,是男性声音还是女性声音。 * FEMALE: 女性 * MALE: 男性
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * language  训练语言,当前仅支持中文。 * CN: 中文 * EN: 英文
    * createType  createType
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tag' => 'tag',
            'description' => 'description',
            'sex' => 'sex',
            'voiceName' => 'voice_name',
            'language' => 'language',
            'createType' => 'create_type',
            'phone' => 'phone',
            'dhtmsJobId' => 'dhtms_job_id',
            'batchName' => 'batch_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tag  tag
    * description  一段描述信息,会呈现在资产库中。
    * sex  语音性别,是男性声音还是女性声音。 * FEMALE: 女性 * MALE: 男性
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * language  训练语言,当前仅支持中文。 * CN: 中文 * EN: 英文
    * createType  createType
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    *
    * @var string[]
    */
    protected static $setters = [
            'tag' => 'setTag',
            'description' => 'setDescription',
            'sex' => 'setSex',
            'voiceName' => 'setVoiceName',
            'language' => 'setLanguage',
            'createType' => 'setCreateType',
            'phone' => 'setPhone',
            'dhtmsJobId' => 'setDhtmsJobId',
            'batchName' => 'setBatchName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tag  tag
    * description  一段描述信息,会呈现在资产库中。
    * sex  语音性别,是男性声音还是女性声音。 * FEMALE: 女性 * MALE: 男性
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * language  训练语言,当前仅支持中文。 * CN: 中文 * EN: 英文
    * createType  createType
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    *
    * @var string[]
    */
    protected static $getters = [
            'tag' => 'getTag',
            'description' => 'getDescription',
            'sex' => 'getSex',
            'voiceName' => 'getVoiceName',
            'language' => 'getLanguage',
            'createType' => 'getCreateType',
            'phone' => 'getPhone',
            'dhtmsJobId' => 'getDhtmsJobId',
            'batchName' => 'getBatchName'
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
    const SEX_FEMALE = 'FEMALE';
    const SEX_MALE = 'MALE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSexAllowableValues()
    {
        return [
            self::SEX_FEMALE,
            self::SEX_MALE,
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['voiceName'] = isset($data['voiceName']) ? $data['voiceName'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['createType'] = isset($data['createType']) ? $data['createType'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['dhtmsJobId'] = isset($data['dhtmsJobId']) ? $data['dhtmsJobId'] : null;
        $this->container['batchName'] = isset($data['batchName']) ? $data['batchName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSexAllowableValues();
                if (!is_null($this->container['sex']) && !in_array($this->container['sex'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sex', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['voiceName'] === null) {
            $invalidProperties[] = "'voiceName' can't be null";
        }
            if ((mb_strlen($this->container['voiceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'voiceName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['voiceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 64)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 16)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 1)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dhtmsJobId']) && (mb_strlen($this->container['dhtmsJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dhtmsJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dhtmsJobId']) && (mb_strlen($this->container['dhtmsJobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dhtmsJobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) > 256)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be bigger than or equal to 1.";
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
    * Gets tag
    *  tag
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\JobTag|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\JobTag|null $tag tag
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets description
    *  一段描述信息,会呈现在资产库中。
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
    * @param string|null $description 一段描述信息,会呈现在资产库中。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sex
    *  语音性别,是男性声音还是女性声音。 * FEMALE: 女性 * MALE: 男性
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 语音性别,是男性声音还是女性声音。 * FEMALE: 女性 * MALE: 男性
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets voiceName
    *  音色名称。该名称会作为资产库中音色模型资产名称。
    *
    * @return string
    */
    public function getVoiceName()
    {
        return $this->container['voiceName'];
    }

    /**
    * Sets voiceName
    *
    * @param string $voiceName 音色名称。该名称会作为资产库中音色模型资产名称。
    *
    * @return $this
    */
    public function setVoiceName($voiceName)
    {
        $this->container['voiceName'] = $voiceName;
        return $this;
    }

    /**
    * Gets language
    *  训练语言,当前仅支持中文。 * CN: 中文 * EN: 英文
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 训练语言,当前仅支持中文。 * CN: 中文 * EN: 英文
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets createType
    *  createType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateType|null
    */
    public function getCreateType()
    {
        return $this->container['createType'];
    }

    /**
    * Sets createType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateType|null $createType createType
    *
    * @return $this
    */
    public function setCreateType($createType)
    {
        $this->container['createType'] = $createType;
        return $this;
    }

    /**
    * Gets phone
    *  手机号
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 手机号
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets dhtmsJobId
    *  形象制作任务id
    *
    * @return string|null
    */
    public function getDhtmsJobId()
    {
        return $this->container['dhtmsJobId'];
    }

    /**
    * Sets dhtmsJobId
    *
    * @param string|null $dhtmsJobId 形象制作任务id
    *
    * @return $this
    */
    public function setDhtmsJobId($dhtmsJobId)
    {
        $this->container['dhtmsJobId'] = $dhtmsJobId;
        return $this;
    }

    /**
    * Gets batchName
    *  批次名称
    *
    * @return string|null
    */
    public function getBatchName()
    {
        return $this->container['batchName'];
    }

    /**
    * Sets batchName
    *
    * @param string|null $batchName 批次名称
    *
    * @return $this
    */
    public function setBatchName($batchName)
    {
        $this->container['batchName'] = $batchName;
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

