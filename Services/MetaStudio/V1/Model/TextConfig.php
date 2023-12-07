<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TextConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TextConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * text  台词脚本。  支持两种模式，纯文本模式和标签模式。  ### 纯文本模式 纯文本模式，使用方法，如“大家好，我是人工智大家，是个虚拟主播”  ### 标签模式 标签模式的定义使用SSML（Speech Synthesis Markup Language）标记语言。  - **\\<speak>**    \\<speak>标签是所有文本的根节点。一切需要调用SSML标签的文本都要包含在\\<speak> \\</speak>对中。  - **\\<emotion>**    \\<emotion>标签是情感标签。对指定一句或多句话生效，标签开始在句子起始位置，标签关闭在句子结尾。用法：\\<emotion type=\"情感标签\">。type可取值包括：HAPPY、SAD、CALM、ANGER  - **\\<insert-action>**    \\<insert-action>标签是动作标签。在文本的指定位置插入动作。用法：\\<insert-action id=\"动作资产ID\" name=\"动作名称\" tag=\"动作标识\"/>。动作资产信息通过资产库接口查询获取。  - **\\<break>**     \\<break>标签是停顿标签。在文本的指定位置插入停顿。用法：\\<break time=\"停顿时长\"/>。停顿时长单位是毫秒，最小值200毫秒。  - **\\<phoneme>**     \\<phoneme>标签是多音字标签。多音字标签可以指定单个汉字的读音。标签起始和关闭之间只能包含1个汉字。属性可取值为汉语拼音，声调用1、2、3、4表示。用法：\\<phoneme ph=\"拼音\"/>字\\</phoneme>。   > * 举例：\\<speak> \\<emotion type=\\\"HAPPY\\\">\\<insert-action id=\"2692ea5d095caaafcfed21dc4590b701\" name=\"双手指尖交触\" tag=\"system_female_animation_0026\"/>大家好，\\<break time=\"200ms\"/>我是MetaStudio制作的人工智能数字人。\\</emotion>我带大家\\<phoneme ph=\"liao3\">了\\</phoneme>解MetaStudio。\\</speak> > * 分身数字人视频制作仅break和phoneme标签生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  台词脚本。  支持两种模式，纯文本模式和标签模式。  ### 纯文本模式 纯文本模式，使用方法，如“大家好，我是人工智大家，是个虚拟主播”  ### 标签模式 标签模式的定义使用SSML（Speech Synthesis Markup Language）标记语言。  - **\\<speak>**    \\<speak>标签是所有文本的根节点。一切需要调用SSML标签的文本都要包含在\\<speak> \\</speak>对中。  - **\\<emotion>**    \\<emotion>标签是情感标签。对指定一句或多句话生效，标签开始在句子起始位置，标签关闭在句子结尾。用法：\\<emotion type=\"情感标签\">。type可取值包括：HAPPY、SAD、CALM、ANGER  - **\\<insert-action>**    \\<insert-action>标签是动作标签。在文本的指定位置插入动作。用法：\\<insert-action id=\"动作资产ID\" name=\"动作名称\" tag=\"动作标识\"/>。动作资产信息通过资产库接口查询获取。  - **\\<break>**     \\<break>标签是停顿标签。在文本的指定位置插入停顿。用法：\\<break time=\"停顿时长\"/>。停顿时长单位是毫秒，最小值200毫秒。  - **\\<phoneme>**     \\<phoneme>标签是多音字标签。多音字标签可以指定单个汉字的读音。标签起始和关闭之间只能包含1个汉字。属性可取值为汉语拼音，声调用1、2、3、4表示。用法：\\<phoneme ph=\"拼音\"/>字\\</phoneme>。   > * 举例：\\<speak> \\<emotion type=\\\"HAPPY\\\">\\<insert-action id=\"2692ea5d095caaafcfed21dc4590b701\" name=\"双手指尖交触\" tag=\"system_female_animation_0026\"/>大家好，\\<break time=\"200ms\"/>我是MetaStudio制作的人工智能数字人。\\</emotion>我带大家\\<phoneme ph=\"liao3\">了\\</phoneme>解MetaStudio。\\</speak> > * 分身数字人视频制作仅break和phoneme标签生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null
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
    * text  台词脚本。  支持两种模式，纯文本模式和标签模式。  ### 纯文本模式 纯文本模式，使用方法，如“大家好，我是人工智大家，是个虚拟主播”  ### 标签模式 标签模式的定义使用SSML（Speech Synthesis Markup Language）标记语言。  - **\\<speak>**    \\<speak>标签是所有文本的根节点。一切需要调用SSML标签的文本都要包含在\\<speak> \\</speak>对中。  - **\\<emotion>**    \\<emotion>标签是情感标签。对指定一句或多句话生效，标签开始在句子起始位置，标签关闭在句子结尾。用法：\\<emotion type=\"情感标签\">。type可取值包括：HAPPY、SAD、CALM、ANGER  - **\\<insert-action>**    \\<insert-action>标签是动作标签。在文本的指定位置插入动作。用法：\\<insert-action id=\"动作资产ID\" name=\"动作名称\" tag=\"动作标识\"/>。动作资产信息通过资产库接口查询获取。  - **\\<break>**     \\<break>标签是停顿标签。在文本的指定位置插入停顿。用法：\\<break time=\"停顿时长\"/>。停顿时长单位是毫秒，最小值200毫秒。  - **\\<phoneme>**     \\<phoneme>标签是多音字标签。多音字标签可以指定单个汉字的读音。标签起始和关闭之间只能包含1个汉字。属性可取值为汉语拼音，声调用1、2、3、4表示。用法：\\<phoneme ph=\"拼音\"/>字\\</phoneme>。   > * 举例：\\<speak> \\<emotion type=\\\"HAPPY\\\">\\<insert-action id=\"2692ea5d095caaafcfed21dc4590b701\" name=\"双手指尖交触\" tag=\"system_female_animation_0026\"/>大家好，\\<break time=\"200ms\"/>我是MetaStudio制作的人工智能数字人。\\</emotion>我带大家\\<phoneme ph=\"liao3\">了\\</phoneme>解MetaStudio。\\</speak> > * 分身数字人视频制作仅break和phoneme标签生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  台词脚本。  支持两种模式，纯文本模式和标签模式。  ### 纯文本模式 纯文本模式，使用方法，如“大家好，我是人工智大家，是个虚拟主播”  ### 标签模式 标签模式的定义使用SSML（Speech Synthesis Markup Language）标记语言。  - **\\<speak>**    \\<speak>标签是所有文本的根节点。一切需要调用SSML标签的文本都要包含在\\<speak> \\</speak>对中。  - **\\<emotion>**    \\<emotion>标签是情感标签。对指定一句或多句话生效，标签开始在句子起始位置，标签关闭在句子结尾。用法：\\<emotion type=\"情感标签\">。type可取值包括：HAPPY、SAD、CALM、ANGER  - **\\<insert-action>**    \\<insert-action>标签是动作标签。在文本的指定位置插入动作。用法：\\<insert-action id=\"动作资产ID\" name=\"动作名称\" tag=\"动作标识\"/>。动作资产信息通过资产库接口查询获取。  - **\\<break>**     \\<break>标签是停顿标签。在文本的指定位置插入停顿。用法：\\<break time=\"停顿时长\"/>。停顿时长单位是毫秒，最小值200毫秒。  - **\\<phoneme>**     \\<phoneme>标签是多音字标签。多音字标签可以指定单个汉字的读音。标签起始和关闭之间只能包含1个汉字。属性可取值为汉语拼音，声调用1、2、3、4表示。用法：\\<phoneme ph=\"拼音\"/>字\\</phoneme>。   > * 举例：\\<speak> \\<emotion type=\\\"HAPPY\\\">\\<insert-action id=\"2692ea5d095caaafcfed21dc4590b701\" name=\"双手指尖交触\" tag=\"system_female_animation_0026\"/>大家好，\\<break time=\"200ms\"/>我是MetaStudio制作的人工智能数字人。\\</emotion>我带大家\\<phoneme ph=\"liao3\">了\\</phoneme>解MetaStudio。\\</speak> > * 分身数字人视频制作仅break和phoneme标签生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  台词脚本。  支持两种模式，纯文本模式和标签模式。  ### 纯文本模式 纯文本模式，使用方法，如“大家好，我是人工智大家，是个虚拟主播”  ### 标签模式 标签模式的定义使用SSML（Speech Synthesis Markup Language）标记语言。  - **\\<speak>**    \\<speak>标签是所有文本的根节点。一切需要调用SSML标签的文本都要包含在\\<speak> \\</speak>对中。  - **\\<emotion>**    \\<emotion>标签是情感标签。对指定一句或多句话生效，标签开始在句子起始位置，标签关闭在句子结尾。用法：\\<emotion type=\"情感标签\">。type可取值包括：HAPPY、SAD、CALM、ANGER  - **\\<insert-action>**    \\<insert-action>标签是动作标签。在文本的指定位置插入动作。用法：\\<insert-action id=\"动作资产ID\" name=\"动作名称\" tag=\"动作标识\"/>。动作资产信息通过资产库接口查询获取。  - **\\<break>**     \\<break>标签是停顿标签。在文本的指定位置插入停顿。用法：\\<break time=\"停顿时长\"/>。停顿时长单位是毫秒，最小值200毫秒。  - **\\<phoneme>**     \\<phoneme>标签是多音字标签。多音字标签可以指定单个汉字的读音。标签起始和关闭之间只能包含1个汉字。属性可取值为汉语拼音，声调用1、2、3、4表示。用法：\\<phoneme ph=\"拼音\"/>字\\</phoneme>。   > * 举例：\\<speak> \\<emotion type=\\\"HAPPY\\\">\\<insert-action id=\"2692ea5d095caaafcfed21dc4590b701\" name=\"双手指尖交触\" tag=\"system_female_animation_0026\"/>大家好，\\<break time=\"200ms\"/>我是MetaStudio制作的人工智能数字人。\\</emotion>我带大家\\<phoneme ph=\"liao3\">了\\</phoneme>解MetaStudio。\\</speak> > * 分身数字人视频制作仅break和phoneme标签生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
            if ((mb_strlen($this->container['text']) > 131072)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 131072.";
            }
            if ((mb_strlen($this->container['text']) < 1)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 1.";
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
    * Gets text
    *  台词脚本。  支持两种模式，纯文本模式和标签模式。  ### 纯文本模式 纯文本模式，使用方法，如“大家好，我是人工智大家，是个虚拟主播”  ### 标签模式 标签模式的定义使用SSML（Speech Synthesis Markup Language）标记语言。  - **\\<speak>**    \\<speak>标签是所有文本的根节点。一切需要调用SSML标签的文本都要包含在\\<speak> \\</speak>对中。  - **\\<emotion>**    \\<emotion>标签是情感标签。对指定一句或多句话生效，标签开始在句子起始位置，标签关闭在句子结尾。用法：\\<emotion type=\"情感标签\">。type可取值包括：HAPPY、SAD、CALM、ANGER  - **\\<insert-action>**    \\<insert-action>标签是动作标签。在文本的指定位置插入动作。用法：\\<insert-action id=\"动作资产ID\" name=\"动作名称\" tag=\"动作标识\"/>。动作资产信息通过资产库接口查询获取。  - **\\<break>**     \\<break>标签是停顿标签。在文本的指定位置插入停顿。用法：\\<break time=\"停顿时长\"/>。停顿时长单位是毫秒，最小值200毫秒。  - **\\<phoneme>**     \\<phoneme>标签是多音字标签。多音字标签可以指定单个汉字的读音。标签起始和关闭之间只能包含1个汉字。属性可取值为汉语拼音，声调用1、2、3、4表示。用法：\\<phoneme ph=\"拼音\"/>字\\</phoneme>。   > * 举例：\\<speak> \\<emotion type=\\\"HAPPY\\\">\\<insert-action id=\"2692ea5d095caaafcfed21dc4590b701\" name=\"双手指尖交触\" tag=\"system_female_animation_0026\"/>大家好，\\<break time=\"200ms\"/>我是MetaStudio制作的人工智能数字人。\\</emotion>我带大家\\<phoneme ph=\"liao3\">了\\</phoneme>解MetaStudio。\\</speak> > * 分身数字人视频制作仅break和phoneme标签生效。
    *
    * @return string
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string $text 台词脚本。  支持两种模式，纯文本模式和标签模式。  ### 纯文本模式 纯文本模式，使用方法，如“大家好，我是人工智大家，是个虚拟主播”  ### 标签模式 标签模式的定义使用SSML（Speech Synthesis Markup Language）标记语言。  - **\\<speak>**    \\<speak>标签是所有文本的根节点。一切需要调用SSML标签的文本都要包含在\\<speak> \\</speak>对中。  - **\\<emotion>**    \\<emotion>标签是情感标签。对指定一句或多句话生效，标签开始在句子起始位置，标签关闭在句子结尾。用法：\\<emotion type=\"情感标签\">。type可取值包括：HAPPY、SAD、CALM、ANGER  - **\\<insert-action>**    \\<insert-action>标签是动作标签。在文本的指定位置插入动作。用法：\\<insert-action id=\"动作资产ID\" name=\"动作名称\" tag=\"动作标识\"/>。动作资产信息通过资产库接口查询获取。  - **\\<break>**     \\<break>标签是停顿标签。在文本的指定位置插入停顿。用法：\\<break time=\"停顿时长\"/>。停顿时长单位是毫秒，最小值200毫秒。  - **\\<phoneme>**     \\<phoneme>标签是多音字标签。多音字标签可以指定单个汉字的读音。标签起始和关闭之间只能包含1个汉字。属性可取值为汉语拼音，声调用1、2、3、4表示。用法：\\<phoneme ph=\"拼音\"/>字\\</phoneme>。   > * 举例：\\<speak> \\<emotion type=\\\"HAPPY\\\">\\<insert-action id=\"2692ea5d095caaafcfed21dc4590b701\" name=\"双手指尖交触\" tag=\"system_female_animation_0026\"/>大家好，\\<break time=\"200ms\"/>我是MetaStudio制作的人工智能数字人。\\</emotion>我带大家\\<phoneme ph=\"liao3\">了\\</phoneme>解MetaStudio。\\</speak> > * 分身数字人视频制作仅break和phoneme标签生效。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
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

